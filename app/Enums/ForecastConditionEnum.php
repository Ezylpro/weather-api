<?php

namespace App\Enums;

enum ForecastConditionEnum: string
{
    case STORM = 'storm';
    case SNOW = 'snow';
    case HAIL = 'hail';
    case RAIN = 'rain';
    case FOG = 'fog';
    case CLEAR_DAY = 'clear_day';
    case CLEAR_NIGHT = 'clear_night';
    case CLOUD = 'cloud';
    case CLOUDLY_DAY = 'cloudly_day';
    case CLOUDLY_NIGHT = 'cloudly_night';
}
