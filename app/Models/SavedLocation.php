<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SavedLocation extends Model
{
    /** @use HasFactory<\Database\Factories\SavedLocationFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'city_id',
        'state_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function forecasts(): HasMany
    {
        return $this->hasMany(Forecast::class, 'city_id', 'city_id');
    }

    public function currentForecast(): HasOne
    {
        return $this->hasOne(Forecast::class, 'city_id', 'city_id')
            ->where('date', now()->format('Y-m-d'));
    }
}
