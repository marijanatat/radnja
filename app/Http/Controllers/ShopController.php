<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $slug)
    {
        $product=Product::where('slug',$slug)->firstOrFail();
        $mightAlsoLike=Product::where('slug','!=',$slug)->mightAlsoLike()->get();
        
// postavljena vrednost stock_threshold u voyageru na 5
        if($product->quantity>setting('site.stock_threshold')){
            $stock='<span class="badge badge-success">In stock</div>';
        }else if($product->quantity<=setting('site.stock_threshold') && $product->quantity>0){
            $stock='<div class="badge badge-warning">Low stock</div>';
        }else {
            $stock='<div class="badge badge-danger">Not available</div>';
        }
        
        return view('product',compact('product','mightAlsoLike','stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
