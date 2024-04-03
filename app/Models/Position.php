<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{

    protected $fillable = [
        'position'
    ];

    public function carPositions() : HasMany
    {
        return $this->hasMany(CarPosition::class);
    }
}
