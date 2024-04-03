<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    protected $fillable = [
      'model',
      'class'
    ];

    protected $with = [
      'carPosition',
      'driver',
      'workingTrips'
    ];

    public function carPositions() : HasMany
    {
        return $this->hasMany(CarPosition::class);
    }

    public function driver() : HasOne
    {
        return $this->hasOne(Driver::class);
    }

    public function workingTrips() : HasMany
    {
        return $this->hasMany(WorkingTrip::class);
    }
}
