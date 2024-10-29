<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $fillable = [
        'name',
        'state_id',
    ];

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function savedLocations(): HasMany
    {
        return $this->hasMany(SavedLocation::class);
    }

    public function forecasts(): HasMany
    {
        return $this->hasMany(Forecast::class);
    }
}
