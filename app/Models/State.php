<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $fillable = [
        'name',
        'uf',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'state_id', 'id');
    }

//    TODO: maybe separate common queries on a trait?
    public function randomCity()
    {
        return $this->cities()->inRandomOrder()->first();
    }
}
