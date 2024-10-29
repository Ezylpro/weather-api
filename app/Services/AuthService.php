<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    /**
     * @throws ValidationException
     */
    public function authenticate(string $email, string $password, array $abilities = ['*']): string
    {
        $authenticated = User::query()
                ->where('email', $email)
                ->first();

        if (! $authenticated || is_null($authenticated->password) || ! Hash::check($password, $authenticated->password)) {
            throw ValidationException::withMessages([
                'credential' => [__('auth.failed')],
            ]);
        }

        return $authenticated->createToken('auth_token', $abilities)->plainTextToken;
    }
}
