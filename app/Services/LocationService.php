<?php

namespace App\Services;

use App\Models\Forecast;
use App\Models\SavedLocation;
use Carbon\Carbon;
use HttpException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class LocationService
{
    public function getUserSavedLocationsWithCurrentForecast(int $user_id): Collection
    {
        $savedLocations = $this->getUserSavedLocations($user_id);

        foreach ($savedLocations as $savedLocation) {
            if (empty($savedLocation->currentForecast)) {
                $this->updateLocationForecasts($savedLocation);

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
    protected function updateLocationForecasts(Model $location): void
    {
        $response = Http::weatherApi($location->city->name, $location->state->name);

        if ($response->failed()) {
            throw new HttpException($response->body());
        }

        $forecasts = $response->json()['results']['forecast'];
        $date = Carbon::createFromFormat('d/m/Y', $response->json()['results']['date']);

        foreach ($forecasts as $forecast) {
//            TODO: parse forecast data into a DTO

            $this->deleteOldForecast($location, $date);
            $this->createForecast($forecast, $location, $date);

            $date->addDay();
        }
    }

    protected function deleteOldForecast(Model $location, Carbon $date): void
    {
        Forecast::query()
            ->where('city_id', $location->city_id)
            ->where('date', $date->format('Y-m-d'))
            ->delete();
    }

    private function createForecast(array $data, Model $location, Carbon $date): void
    {
        Forecast::query()->create([
            'city_id' => $location->city_id,
            'date' => $date->format('Y-m-d'),
            'max_temp' => $data['max'],
            'min_temp' => $data['min'],
            'humidity' => $data['humidity'],
            'cloudiness' => $data['cloudiness'],
            'rain_probability' => $data['rain_probability'],
            'condition' => $data['condition'],
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
}
