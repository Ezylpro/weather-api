<?php

namespace Tests\Traits;

use Illuminate\Support\Facades\Artisan;

trait SeedLocations
{
    public function setUpSeedLocations()
    {
        Artisan::call('db:seed', ['--class' => 'LocationsSeeder']);
    }
}
