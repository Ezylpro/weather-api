<?php

namespace App\Http\Controllers;

use App\Http\Resources\OptionsResource;
use App\Models\State;
use App\Services\SelectService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SelectController extends Controller
{
    /**
     * List states options
     *
     * @unauthenticated
     */
    public function getStates(Request $request, SelectService $service): AnonymousResourceCollection
    {
        $states = $service->getStatesAsOptions();

        return OptionsResource::collection($states);
    }

    /**
     * List cities options
     *
     * List all cities of a state as options.
     * @unauthenticated
     */
    public function getStateCities(Request $request, SelectService $service, State $state): AnonymousResourceCollection
    {
        $cities = $service->getCitiesAsOptions($state->id);

        return OptionsResource::collection($cities);
    }
}
