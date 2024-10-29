<?php

namespace Tests\Feature\Select;

use App\Models\State;
use Tests\TestCase;
use Tests\Traits\SeedLocations;

class StateCitySelectTest extends TestCase
{
    use SeedLocations;

    public function test_get_states()
    {
        $statesCount = State::query()->count();

        $response = $this->get("/api/states");

        $response->assertSuccessful();
        $response->assertJsonCount($statesCount, 'data');
    }

    public function test_get_cities()
    {
        $state = $this->getRandomState();
        $citiesCount = $state->cities()->count();

        $response = $this->get("/api/states/$state->id/cities");

        $response->assertSuccessful();
        $response->assertJsonCount($citiesCount, 'data');
    }
}
