<?php

namespace App\Services;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Eloquent\Collection;

class SelectService
{

    public function getStatesAsOptions(): Collection
    {
        return State::query()
            ->select([
                'id as value',
                'name as label'
            ])->orderBy('name')
            ->get();
    }

    public function getCitiesAsOptions(int $state_id): Collection
    {
        return City::query()
            ->select([
                'id as value',
                'name as label'
            ])->where('state_id', $state_id)
            ->orderBy('name')
            ->get();
    }
}
