<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    public function createUser($password = 'password', $authenticated = true): User
    {
        $user = User::factory([
            'password' => $password,
        ])->create();

        if ($authenticated) {
            $user->access_token = 'Bearer ' . $user->createToken('auth_token')->plainTextToken;
        }

        return $user;
    }
}
