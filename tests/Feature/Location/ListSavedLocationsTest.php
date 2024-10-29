<?php

namespace Tests\Feature\Location;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Tests\Traits\MockedWeatherApi;
use Tests\Traits\SeedLocations;

class ListSavedLocationsTest extends TestCase
{
    use MockedWeatherApi, SeedLocations;

    public function test_list_saved_locations_with_new_data(): void
    {
        $user = $this->createUser();
        $location = $this->createRandomSavedLocation($user->id);

        $response = $this->withToken($user->access_token)
            ->getJson('/api/locations/saved');

        $response->assertSuccessful();

        $response->assertExactJsonStructure([
            'data' => [
                '*' => [
                    'state' => [
                        'id',
                        'name',
                    ],
                    'city' => [
                        'id',
                        'name',
                    ],
                    'updated_at',
                    'max_temp',
                    'min_temp',
                    'rain_probability',
                    'condition',
                ]
            ]
        ]);

        $location->loadMissing(['state', 'city']);

        $response->assertJsonFragment([
            'state' => [
                'id' => $location->state->id,
                'name' => $location->state->name,
            ],
            'city' => [
                'id' => $location->city->id,
                'name' => $location->city->name,
            ]
        ]);

        $this->assertDatabaseHas('forecasts', [
            'city_id' => $location->city_id,
            'date' => now()->format('Y-m-d')
        ]);

        Http::assertSent(function (Request $request) use ($location) {
            $url = config('services.hgbrasil.url');
            $city = $location->city->name;
            $state = $location->state->name;

            return urldecode($request->url()) == "$url/weather?key=&locale=en&city_name=$city,$state";
        });

        $this->assertDatabaseCount('forecasts', config('settings.location_forecast_limit'));
    }

    public function test_list_saved_locations_with_old_data(): void
    {
        $user = $this->createUser();
        $location = $this->createRandomSavedLocation($user->id);

        $this->createForecast($location->city_id);

        $response = $this->withToken($user->access_token)
            ->getJson('/api/locations/saved');

        $response->assertSuccessful();

        $response->assertExactJsonStructure([
            'data' => [
                '*' => [
                    'state' => [
                        'id',
                        'name',
                    ],
                    'city' => [
                        'id',
                        'name',
                    ],
                    'updated_at',
                    'max_temp',
                    'min_temp',
                    'rain_probability',
                    'condition',
                ]
            ]
        ]);

        $location->loadMissing(['state', 'city']);

        $response->assertJsonFragment([
            'state' => [
                'id' => $location->state->id,
                'name' => $location->state->name,
            ],
            'city' => [
                'id' => $location->city->id,
                'name' => $location->city->name,
            ]
        ]);

        $this->assertDatabaseHas('forecasts', [
            'city_id' => $location->city_id,
            'date' => now()->format('Y-m-d')
        ]);

        Http::assertNothingSent();
    }
}
