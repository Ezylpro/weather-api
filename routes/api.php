<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/states', [SelectController::class, 'getStates']);
Route::get('/states/{state}/cities', [SelectController::class, 'getStateCities']);

Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'profile']);

    Route::prefix('/locations')->controller(LocationController::class)->group(function () {
        Route::get('/saved', 'listSavedLocations');

        Route::prefix('/{state}/{city}')->scopeBindings()->group(function () {
            Route::get('/', 'getLocationDetails');
            Route::delete('/', 'deleteSavedLocation');

            Route::post('/save', 'saveLocation');
        });
    });
});
