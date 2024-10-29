<?php

namespace Tests\Feature\Location;

use Tests\TestCase;
use Tests\Traits\SeedLocations;

class SaveLocationTest extends TestCase
{
    use SeedLocations;

    public function test_user_can_save_locations(): void
    {
        $user = $this->createUser();
        $state = $this->getRandomState();
        $city = $state->randomCity();

        $response = $this->withToken($user->access_token)
            ->post("/api/locations/$state->id/$city->id/save");

        $response->assertCreated();

        $this->assertDatabaseHas('saved_locations', [
            'user_id' => $user->id,
            'state_id' => $state->id,
            'city_id' => $city->id
        ]);
    }

    public function test_user_cant_save_more_than_locations_limit(): void
    {
        $user = $this->createUser();
        $state = $this->getRandomState();
        $city = $state->randomCity();

        $this->createRandomSavedLocation($user->id, 3);

        $response = $this->withToken($user->access_token)
            ->post("/api/locations/$state->id/$city->id/save");

        $response->assertForbidden();

        $this->assertDatabaseCount('saved_locations', 3);
    }

    public function test_user_cant_save_location_city_from_another_state(): void
    {
        $user = $this->createUser();
        $state = $this->getRandomState();
        $city = $state->randomCity();

        $wrongStateId = $state->id + 1;

        $response = $this->withToken($user->access_token)
            ->post("/api/locations/$wrongStateId/$city->id/save");

        $response->assertNotFound();

        $this->assertDatabaseEmpty('saved_locations');
    }
}
