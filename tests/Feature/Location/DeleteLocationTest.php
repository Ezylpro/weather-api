<?php

namespace Tests\Feature\Location;

use Tests\TestCase;
use Tests\Traits\SeedLocations;

class DeleteLocationTest extends TestCase
{
    use SeedLocations;

    public function test_delete_saved_location(): void
    {
        $user = $this->createUser();
        $location = $this->createRandomSavedLocation($user->id);

        $response = $this->withToken($user->access_token)
            ->delete("/api/locations/$location->state_id/$location->city_id");

        $response->assertSuccessful();

        $this->assertDatabaseMissing('saved_locations', [
            'user_id' => $user->id,
            'state_id' => $location->state_id,
            'city_id' => $location->city_id,
        ]);
    }

    public function test_nothing_happens_when_delete_non_existing_saved_location(): void
    {
        $user = $this->createUser();
        $state = $this->getRandomState();
        $city = $state->randomCity();

        $response = $this->withToken($user->access_token)
            ->delete("/api/locations/$state->id/$city->id");

        $response->assertSuccessful();
    }

    public function test_only_deletes_specific_saved_location()
    {
        $user = $this->createUser();
        $location = $this->createRandomSavedLocation($user->id);

        $newUser = $this->createUser();
        $newLocation = $this->createRandomSavedLocation($newUser->id);

        $response = $this->withToken($user->access_token)
            ->delete("/api/locations/$location->state_id/$location->city_id");

        $response->assertSuccessful();

        $this->assertDatabaseHas('saved_locations', [
            'user_id' => $newUser->id,
            'state_id' => $newLocation->state_id,
            'city_id' => $newLocation->city_id,
        ]);

        $this->assertDatabaseMissing('saved_locations', [
            'user_id' => $user->id,
            'state_id' => $location->state_id,
            'city_id' => $location->city_id,
        ]);
    }
}
