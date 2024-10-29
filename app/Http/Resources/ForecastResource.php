<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ForecastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'updated_at' => $this->updated_at->toDateTimeString(),
            'date' => $this->date->toDateString(),
            'max_temp' => $this->max_temp,
            'min_temp' => $this->min_temp,
            'humidity' => $this->humidity,
            'cloudiness' => $this->cloudiness,
            'rain_probability' => $this->rain_probability,
            'condition' => $this->condition
        ];
    }
}
