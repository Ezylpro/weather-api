<?php

namespace App\DTOs;

use App\Enums\ForecastConditionEnum;
use Illuminate\Validation\Rules\Enum;
use WendellAdriel\ValidatedDTO\Casting\EnumCast;
use WendellAdriel\ValidatedDTO\Casting\IntegerCast;
use WendellAdriel\ValidatedDTO\ValidatedDTO;

class WeatherApiResponseDTO extends ValidatedDTO
{
    public int $max_temp;
    public int $min_temp;
    public int $humidity;
    public int $cloudiness;
    public int $rain_probability;
    public ForecastConditionEnum $condition;

    protected function rules(): array
    {
        return [
            'max_temp' => ['required', 'numeric'],
            'min_temp' => ['required', 'numeric'],
            'humidity' => ['required', 'numeric'],
            'cloudiness' => ['required', 'numeric'],
            'rain_probability' => ['required', 'numeric'],
            'condition' => ['required', new Enum(ForecastConditionEnum::class)],
        ];
    }

    protected function mapData(): array
    {
        return [
            'max' => 'max_temp',
            'min' => 'min_temp',
        ];
    }

    protected function defaults(): array
    {
        return [];
    }

    protected function casts(): array
    {
        return [
            'max_temp' => new IntegerCast(),
            'min_temp' => new IntegerCast(),
            'humidity' => new IntegerCast(),
            'rain_probability' => new IntegerCast(),
            'cloudiness' => new IntegerCast(),
            'condition' => new EnumCast(ForecastConditionEnum::class),
        ];
    }
}
