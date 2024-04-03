<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarPosition extends Model
{
    protected $with = [
        'car',
        'position'
    ];

    public function car() : HasOne
    {
        return $this->hasOne(Car::class);
    }

    public function position() : HasMany
    {
        return $this->hasMany(Position::class);
    }
}
