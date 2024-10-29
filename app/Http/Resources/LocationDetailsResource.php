<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'city' => $this->name,
            'state' => $this->state->name,
            'is_saved' => boolval($this->is_saved),
            'forecasts' => ForecastResource::collection($this->forecasts)
        ];
    }
}
