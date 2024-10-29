<?php

namespace Tests\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

trait MockedWeatherApi
{
    public function setUpMockedWeatherApi(): void
    {
        $url = config('services.hgbrasil.url');

        $forecasts = [];

        for ($day = now(); $day <= now()->addDays(5); $day->addDay()) {
            $forecasts[] = [
                "date" => $day->format('d/m/Y'),
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
                    "date" => Carbon::now()->format('d/m/Y'),
                    "forecast" => $forecasts
                ]
            ])
        ]);
    }
}
