<?php

namespace Tests\Feature\User;

use Tests\TestCase;

class UserLoginTest extends TestCase
{
    public function test_login_with_valid_credentials(): void
    {
        $user = $this->createUser('new-password', false);

        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'new-password',
        ]);

        $response->assertOk();

        $response->assertExactJsonStructure([
            'token',
        ]);
    }

    public function test_login_with_invalid_credentials(): void
    {
        $user = $this->createUser('new-password', false);

        $response = $this->postJson('/api/login', [
            'email' => 'invalid-email@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertUnauthorized();
    }
}
