<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'profile']);

    Route::prefix('/locations')->controller(LocationController::class)->group(function () {
        Route::get('/saved', 'listSavedLocations');
    });
});
