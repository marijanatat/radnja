<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.details' => 5,
            'products.description' => 2,
        ],
    ];



    public function categories()
    {
        return $this->belongsTo('App\Category');
    }  

    public function presentPrice()
    {
        return number_format( $this->price).' DIN';
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
