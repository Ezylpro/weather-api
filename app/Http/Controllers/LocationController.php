<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveLocationRequest;
use App\Http\Resources\LocationsListResource;
use App\Models\City;
use App\Models\State;
use App\Services\LocationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LocationController extends Controller
{
    public function listSavedLocations(Request $request, LocationService $service): AnonymousResourceCollection
    {
        $locations = $service->getUserSavedLocationsWithCurrentForecast($request->user()->id);

        return LocationsListResource::collection($locations);
    }

    public function saveLocation(SaveLocationRequest $request, LocationService $service, State $state, City $city): JsonResponse
    {
        $service->saveLocation($request->user()->id, $state->id, $city->id);

        return response()->json([], 201);
    }
}
