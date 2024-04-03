<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class CarModel implements Filter
{
     public function __invoke(Builder $query, $value, $property) : Builder
     {
         return $query->where('model' , 'LIKE', '%' . $value . '%');
     }
}
