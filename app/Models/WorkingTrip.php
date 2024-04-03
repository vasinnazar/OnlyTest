<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkingTrip extends Model
{
    protected $fillable = [
        'trip_start',
        'trip_end'
    ];

    protected $with = [
      'car'
    ];

    public function car() : BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
