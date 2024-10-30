<?php

namespace Tests\Feature\Location;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use Tests\Traits\MockedWeatherApi;
use Tests\Traits\SeedLocations;

class LocationsDetailsTest extends TestCase
{
    use MockedWeatherApi, SeedLocations;

    public function test_get_location_with_no_data(): void
    {
        $forecastsLimit = config('settings.location_forecast_limit');
        $user = $this->createUser();
        $state = $this->getRandomState();
        $city = $state->randomCity();

        $response = $this->withToken($user->access_token)
            ->get("/api/locations/$state->id/$city->id");

        $response->assertSuccessful();
        $response->assertExactJsonStructure([
            'data' => [
                'city',
                'state',
                'is_saved',
                'forecasts' => [
                    '*' => [
                        'updated_at',
                        'date',
                        'max_temp',
                        'min_temp',
                        'humidity',
                        'cloudiness',
                        'rain_probability',
                        'condition',
                    ]
                ]
            ]
        ]);

        $response->assertJsonFragment([
            'city' => $city->name,
            'state' => $state->name,
            'is_saved' => false
        ]);

        Http::assertSent(function (Request $request) use ($city, $state) {
            $url = config('services.hgbrasil.url');
            $city = $city->name;
            $state = $state->uf;

            return urldecode($request->url()) == "$url/weather?key=&locale=en&city_name=$city,$state";
        });

        $this->assertDatabaseCount('forecasts', $forecastsLimit);
    }

    public function test_get_location_with_data(): void
    {
        $forecastsLimit = config('settings.location_forecast_limit');
        $user = $this->createUser();
        $state = $this->getRandomState();
        $city = $state->randomCity();

        $this->createMultipleForecasts($city->id, now(), $forecastsLimit);

        $response = $this->withToken($user->access_token)
            ->get("/api/locations/$state->id/$city->id");

        $response->assertSuccessful();
        $response->assertExactJsonStructure([
            'data' => [
                'city',
                'state',
                'is_saved',
                'forecasts' => [
                    '*' => [
                        'updated_at',
                        'date',
                        'max_temp',
                        'min_temp',
                        'humidity',
                        'cloudiness',
                        'rain_probability',
                        'condition',
                    ]
                ]
            ]
        ]);

        $response->assertJsonFragment([
            'city' => $city->name,
            'state' => $state->name,
            'is_saved' => false
        ]);

        Http::assertNothingSent();

        $this->assertDatabaseCount('forecasts', $forecastsLimit);
    }

    public function test_get_location_with_partial_data(): void
    {
        $forecastsLimit = config('settings.location_forecast_limit');
        $user = $this->createUser();
        $state = $this->getRandomState();
        $city = $state->randomCity();

        $variableReduction = rand(1, $forecastsLimit - 1);

        $this->createMultipleForecasts($city->id, now(), $forecastsLimit - $variableReduction);

        $response = $this->withToken($user->access_token)
            ->get("/api/locations/$state->id/$city->id");

        $response->assertSuccessful();
        $response->assertExactJsonStructure([
            'data' => [
                'city',
                'state',
                'is_saved',
                'forecasts' => [
                    '*' => [
                        'updated_at',
                        'date',
                        'max_temp',
                        'min_temp',
                        'humidity',
                        'cloudiness',
                        'rain_probability',
                        'condition',
                    ]
                ]
            ]
        ]);

        $response->assertJsonFragment([
            'city' => $city->name,
            'state' => $state->name,
            'is_saved' => false
        ]);

        Http::assertSent(function (Request $request) use ($city, $state) {
            $url = config('services.hgbrasil.url');
            $city = $city->name;
            $state = $state->uf;

            return urldecode($request->url()) == "$url/weather?key=&locale=en&city_name=$city,$state";
        });

        $this->assertDatabaseCount('forecasts', 5);
    }

    public function test_return_is_saved_when_user_has_saved_location()
    {
        $user = $this->createUser();
        $location = $this->createRandomSavedLocation($user->id);

        $response = $this->withToken($user->access_token)
            ->get("/api/locations/$location->state_id/$location->city_id");

        $response->assertSuccessful();

        $location->loadMissing(['city', 'state']);

        $response->assertJsonFragment([
            'city' => $location->city->name,
            'state' => $location->state->name,
            'is_saved' => true
        ]);
    }

    public function test_wont_return_is_saved_when_user_has_another_location_saved(): void
    {
        $user = $this->createUser();
        $location = $this->createRandomSavedLocation($user->id);

        $state = $this->getRandomState($location->state_id);
        $city = $state->randomCity();

        $response = $this->withToken($user->access_token)
            ->get("/api/locations/$state->id/$city->id");

        $response->assertSuccessful();

        $response->assertJsonFragment([
            'city' => $city->name,
            'state' => $state->name,
            'is_saved' => false
        ]);
    }

    public function test_another_user_saved_location_wont_set_current_user_as_saved()
    {
        $user = $this->createUser();

        $newUser = $this->createUser();
        $location = $this->createRandomSavedLocation($newUser->id);

        $location->loadMissing(['city', 'state']);

        $state = $location->state;
        $city = $location->city;

        $response = $this->withToken($user->access_token)
            ->get("/api/locations/$state->id/$city->id");

        $response->assertSuccessful();

        $response->assertJsonFragment([
            'city' => $city->name,
            'state' => $state->name,
            'is_saved' => false
        ]);
    }
}
