<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class TripPeriod implements Filter
{
     public function __invoke(Builder $query, $value, $property) : Builder
     {
         $dates = explode(',', $value);
         return $query->whereHas('workingTrips', function (Builder $query) use ($dates) {
             $query->whereNull(function ($query) use ($dates) {
                 $query->whereDate('trip_start', '<', $dates[0])->whereDate('trip_end', '>', $dates[0]);
                 })->whereNull(function ($query) use ($dates) {
                 $query->whereDate('trip_start', '<', $dates[1])->whereDate('trip_end', '>', $dates[1]);
             });
         });
     }
}
