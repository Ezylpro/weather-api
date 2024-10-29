<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserProfileTest extends TestCase
{
    public function test_user_can_see_profile(): void
    {
        $user = $this->createUser();

        $response = $this->withToken($user->access_token)
            ->get('/api/user');

        $response->assertOk();

        $response->assertJsonStructure([
            'data' => [
                'id',
                'name',
                'email'
            ]
        ]);
    }

    public function test_user_cannot_see_profile_when_not_authenticated(): void
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->get('/api/user');

        $response->assertUnauthorized();
    }
}
