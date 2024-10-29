<?php

namespace Tests;

use App\Models\Forecast;
use App\Models\SavedLocation;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Log;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    public function createUser(string $password = 'password', bool $authenticated = true): User
    {
        $user = User::factory()
            ->create([
                'password' => $password,
            ]);

        if ($authenticated) {
            $user->access_token = 'Bearer ' . $user->createToken('auth_token')->plainTextToken;
        }

        return $user;
    }

    public function createRandomSavedLocation(int $user_id, int $count = 1): SavedLocation
    {
        $locations = SavedLocation::factory()
            ->count($count)
            ->create([
                'user_id' => $user_id,
            ]);

        return $locations->first();
    }

    public function createForecast(int $city_id, Carbon $date = null, $count = 1): Forecast
    {
        $date = $date ?? Carbon::now();

        return Forecast::query()->create([
            'city_id' => $city_id,
            'date' => $date->format('Y-m-d'),
            'max_temp' => 27,
            'min_temp' => 20,
            'humidity' => 73,
            'cloudiness' => 38,
            'rain_probability' => 72,
            'condition' => 'rain',
        ]);
    }

    public function createMultipleForecasts(int $city_id, Carbon $date = null, int $count = 1): void
    {
        $date = $date ?? Carbon::now();
        $finalDate = $date->clone()->addDays($count)->startOfDay();

        for ($day = $date; $day->lt($finalDate); $day->addDay()) {
            Forecast::query()->create([
                'city_id' => $city_id,
                'date' => $day->format('Y-m-d'),
                'max_temp' => 27,
                'min_temp' => 20,
                'humidity' => 73,
                'cloudiness' => 38,
                'rain_probability' => 72,
                'condition' => 'rain',
            ]);
        }
    }

    public function getRandomState($excluded_state_id = null): State
    {
        $query = State::query()
            ->inRandomOrder();

        if ($excluded_state_id) {
            $query->where('id', '!=', $excluded_state_id);
        }

        return $query->first();
    }
}
