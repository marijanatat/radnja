<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use TCG\Voyager\Traits\Resizable;
use App\Color;
use App\Size;


class Product extends Model
{  
    use Resizable;

    protected $guarded=[];
    protected $with=['colors','sizes'];
    
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

    public function presentPrice()
    {
        return number_format($this->price, 2, ',', '.') . ' RSD';
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

    public function scopeFilter($query, QueryFilter $filters)
    {
       return $filters->apply($query);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class,'product_colors');
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class,'product_sizes');
    }
}
