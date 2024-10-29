<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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
        Http::macro('weatherApi', function ($city, $state) {
            $base_url = config('services.hgbrasil.url');
            $api_key = config('services.hgbrasil.api_key');

            return Http::get("$base_url/weather?key=$api_key&locale=en&city_name=$city,$state");
        });
    }
}
