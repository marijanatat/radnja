<?php

namespace App\Http\Filters;


class ProductFilters extends QueryFilter
{
  public function size($value)
  {
    return $this->builder->where('size', $value);
  }

  public function gender($value)
  {
    return $this->builder->where('gender', $value);
  }
  public function price($min, $max)
  {
    return $this->builder->where('price','>=',$min)->orWhere('price','<=',$max);//whereIn
  }
}