<?php

namespace App\Http\Controllers;

use App\Http\Filters\ProductFilters;
use App\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductFilters $filters)
    {
    //    return Product::filter($filters)->get();

      
    //     if($request->has('size')){
    //          Product::where('size',$request->size)->get();
    //     }
    //     if($request->has('gender')){
    //          Product::where('gender',$request->gender)->get();
    //     }
    //     if($request->has('price')){
    //         Product::orderBy('price',$request->price)->get();
    //    }
        
        $products=Product::inRandomOrder()->take(8)->get();
        return view('main', compact('products'));

    }
}

    
   