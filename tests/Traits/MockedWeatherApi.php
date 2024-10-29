<?php

namespace Tests\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

trait MockedWeatherApi
{
    public function setUpMockedWeatherApi(): void
    {
        $url = config('services.hgbrasil.url');
        $forecastsLimit = config('settings.location_forecast_limit');
        $finalDate = now()->addDays($forecastsLimit)->startOfDay();

        $forecasts = [];

        for ($day = now(); $day->lt($finalDate); $day->addDay()) {
            $forecasts[] = [
                "date" => $day->format('Y-m-d'),
                "max" => 27,
                "min" => 20,
                "humidity" => 73,
                "cloudiness" => 38,
                "rain_probability" => 72,
                "condition" => "rain",
            ];
        }

        Http::fake([
            "$url/weather*" => Http::response([
                "results" => [
                    "date" => Carbon::now()->format('Y-m-d'),
                    "forecast" => $forecasts
                ]
            ])
        ]);
    }
}
