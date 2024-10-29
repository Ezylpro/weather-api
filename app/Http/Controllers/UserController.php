<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserProfileResource;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * @unauthenticated
     */
    public function login(LoginRequest $request, AuthService $service): JsonResponse
    {
        try {
            $token = $service->authenticate($request->get('email'), $request->get('password'));

            return response()->json([
                'token' => $token
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 401);
        }
    }

    public function profile(Request $request)
    {
        $user = $request->user();

        return UserProfileResource::make($user);
    }
}
