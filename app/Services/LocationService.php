<?php

namespace App\Services;

use App\DTOs\WeatherApiResponseDTO;
use App\Models\City;
use App\Models\Forecast;
use App\Models\SavedLocation;
use App\Models\State;
use Carbon\Carbon;
use HttpException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LocationService
{
    /**
     * @throws HttpException
     */
    public function getUserSavedLocationsWithCurrentForecast(int $user_id): Collection
    {
        $savedLocations = $this->getUserSavedLocations($user_id);

        foreach ($savedLocations as $savedLocation) {
            if (empty($savedLocation->currentForecast)) {
                $this->updateLocationForecasts($savedLocation->state, $savedLocation->city);

                $savedLocation->currentForecast = $savedLocation->currentForecast()->first();
            }
        }

        return $savedLocations;
    }

    protected function getUserSavedLocations(int $user_id): Collection
    {
        return SavedLocation::query()
            ->where('user_id', $user_id)
            ->with(['currentForecast', 'state', 'city'])
            ->get();
    }

    /**
     * @throws HttpException
     */
    protected function updateLocationForecasts(State $state, City $city): void
    {
        $response = Http::weatherApi($city->name, $state->uf);

        if ($response->failed()) {
            throw new HttpException($response->body());
        }

        $forecasts = $response->json()['results']['forecast'];
        Log::info($response->json()['results']['date']);
        $date = Carbon::createFromFormat('d/m/Y', $response->json()['results']['date']);

        foreach ($forecasts as $forecast) {
            $forecast = WeatherApiResponseDTO::fromArray($forecast);

            $this->deleteOldForecast($city->id, $date);
            $this->createForecast($forecast, $city->id, $date);

            $date->addDay();
        }
    }

    protected function deleteOldForecast(int $city_id, Carbon $date): void
    {
        Forecast::query()
            ->where('city_id', $city_id)
            ->where('date', $date->format('Y-m-d'))
            ->delete();
    }

    private function createForecast(WeatherApiResponseDTO $dto, int $city_id, Carbon $date): void
    {
        Forecast::query()->create([
            'city_id' => $city_id,
            'date' => $date->format('Y-m-d'),
            'max_temp' => $dto->max_temp,
            'min_temp' => $dto->min_temp,
            'humidity' => $dto->humidity,
            'cloudiness' => $dto->cloudiness,
            'rain_probability' => $dto->rain_probability,
            'condition' => $dto->condition,
        ]);
    }

    public function saveLocation(int $user_id, int $state_id, int $city_id): Model|SavedLocation
    {
        return SavedLocation::query()->updateOrCreate([
            'user_id' => $user_id,
            'state_id' => $state_id,
            'city_id' => $city_id
        ]);
    }

    public function deleteSavedLocation(int $user_id, int $state_id, int $city_id): void
    {
        SavedLocation::query()
            ->where('user_id', $user_id)
            ->where('state_id', $state_id)
            ->where('city_id', $city_id)
            ->delete();
    }

    /**
     * @throws HttpException
     */
    public function getLocationForecasts(State $state, City $city, int $user_id): City
    {
        $forecastLimit = config('settings.location_forecast_limit');
        $forecasts = $this->getLocationForecastsBaseQuery($user_id, $city->id, $forecastLimit);

        if ($forecasts->count() < $forecastLimit) {
            $this->updateLocationForecasts($state, $city);
        }

        $city->setRelation('forecasts', $forecasts->get());
        $city->setRelation('state', $state);
        $city->loadCount(['savedLocations as is_saved' => function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            }
        ]);

        return $city;
    }

    private function getLocationForecastsBaseQuery(int $user_id, int $city_id, int $forecast_limit): Builder
    {
        return Forecast::query()
            ->where('city_id', $city_id)
            ->where('date', '>=', now()->format('Y-m-d'))
            ->where('date', '<=', now()->addDays($forecast_limit)->format('Y-m-d'));
    }
}
