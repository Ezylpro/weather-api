<?php

namespace App\Models;

use App\Enums\ForecastConditionEnum;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    protected $fillable = [
        'city_id',
        'date',
        'max_temp',
        'min_temp',
        'humidity',
        'cloudiness',
        'rain_probability',
        'condition',
    ];

    protected $casts = [
        'date' => 'date',
        'updated_at' => 'datetime',
        'condition' => ForecastConditionEnum::class
    ];
}
