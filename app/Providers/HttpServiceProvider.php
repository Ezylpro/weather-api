<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Http::macro('weather-api', function ($city, $state) {
            $api_key = config('services.hgbrasil.api_key');

            return Http::get("https://api.hgbrasil.com/weather?key=$api_key&locale=en&city_name=$city,$state");
        });
    }
}
