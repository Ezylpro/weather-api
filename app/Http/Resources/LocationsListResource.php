<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationsListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'state' => StateResource::make($this->state),
            'city' => CityResource::make($this->city),
            'updated_at' => $this->currentForecast->updated_at,
            'max_temp' => $this->currentForecast->max_temp,
            'min_temp' => $this->currentForecast->min_temp,
            'rain_probability' => $this->currentForecast->rain_probability,
            'condition' => $this->currentForecast->condition
        ];
    }
}
