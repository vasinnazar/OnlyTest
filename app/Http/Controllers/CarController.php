<?php

namespace App\Http\Controllers;

use App\Filters\CarClass;
use App\Filters\CarModel;
use App\Filters\TripPeriod;
use App\Models\Car;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CarController extends Controller
{
    public function index()
    {
        return QueryBuilder::for(Car::class)
            ->allowedIncludes(['carPosition', 'driver', 'workingTrips'])
            ->allowedFilters([
                    AllowedFilter::custom('period', new TripPeriod()),
                    AllowedFilter::custom('model', new CarModel()),
                    AllowedFilter::custom('class', new CarClass())
                ]
            )->get();
    }
}
