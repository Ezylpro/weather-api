<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveLocationRequest;
use App\Http\Resources\LocationDetailsResource;
use App\Http\Resources\LocationsListResource;
use App\Models\City;
use App\Models\State;
use App\Services\LocationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LocationController extends Controller
{
    /**
     * List saved locations
     *
     * Get a list of locations saved by the user.
     * @throws \HttpException
     */
    public function listSavedLocations(Request $request, LocationService $service): AnonymousResourceCollection
    {
        $locations = $service->getUserSavedLocationsWithCurrentForecast($request->user()->id);

        return LocationsListResource::collection($locations);
    }

    /**
     * Save location
     *
     * Save a location for the user. The user can save up to 3 locations.
     */
    public function saveLocation(SaveLocationRequest $request, LocationService $service, State $state, City $city): JsonResponse
    {
        $service->saveLocation($request->user()->id, $state->id, $city->id);

        return response()->json([], 201);
    }

    /**
     * Delete saved location
     *
     * Delete a location saved by the user. If no saved locations exist, the request will simply be ignored.
     */
    public function deleteSavedLocation(Request $request, LocationService $service, State $state, City $city): JsonResponse
    {
        $service->deleteSavedLocation($request->user()->id, $state->id, $city->id);

        return response()->json();
    }

    /**
     * Location details
     *
     * Get the details of a location.
     */
    public function getLocationDetails(Request $request, LocationService $service, State $state, City $city)
    {
        $location = $service->getLocationForecasts($state, $city, $request->user()->id);

        return LocationDetailsResource::make($location);
    }
}
