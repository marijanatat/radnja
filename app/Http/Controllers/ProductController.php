<?php

namespace App\Http\Controllers;

use App\Http\Filters\ProductFilters;
use App\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductFilters $filters)
    {
        $products=Product::inRandomOrder()->take(8)->get();
        return view('main', compact('products'));
    }
}

    
   