<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    public function hasMany()
    {
      return $this->hasMany(Product::class);
    }
}
