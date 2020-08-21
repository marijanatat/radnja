<?php

namespace App\Http\Controllers;

use App\Color;
use App\Product;
use App\ProductColor;
use App\ProductSize;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
        $mightAlsoLike=Product::mightAlsoLike()->get();
        return view('cart',[
            'mightAlsoLike'=>$mightAlsoLike]);
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
    //     $validator = Validator::make($request->all(), [
    //         'quantity' => 'required|numeric|between:1,10',
    //         'size' => 'required',
    //         'color' => 'required',
           
    //     ]);

    //     if ($validator->fails()) {
    //         session()->flash('errors', collect(['Količina mora biti između 1 i 10.'],['Boja je obavezna.'],['Size is required.']));
    //     //  return response()->json(['success' => false], 400);
    //         return back()->withErrors($validator)->withInput();
    //     }

        $request->validate([
            'quantity' => 'required|numeric|between:1,10',
            'size' => 'required',
            'color' => 'required',
        ],
        [
            'size.required' => 'Morate izabrati veličinu!',
            'color.required' => 'Morate izabrati boju!'
        ]);

        $duplicates=Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if($duplicates->isNotEmpty()){
            return redirect(route('cart.index'))->with('success_message','Item is already in your Cart.');
        }
        
        Cart::add(['id' => $request->id, 'name' => $request->name, 'qty' => $request->quantity, 'price' => $request->price, 'weight' => 0, 'options' => ['size' => $request->size, 'color' => $request->color ]])
                
            ->associate('App\Product');               

        return redirect(route('cart.index'))->with('success_message','Item is added to your cart');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,10',
           
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 10.']));
            return response()->json(['success' => false], 400);
        }

        if ($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success' => false], 400);
        }


        Cart::update($id,$request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success'=>true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message','Item has been removed from Cart');
    }

    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);
        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already Saved For Later!');
        }

        Cart::instance('saveForLater')->add(['id' => $item->id, 'name' => $item->name, 
                       'qty' => $item->qty, 'price' => $item->price, 
                       'weight' => 0, 'options' => ['size' => $item->options['size'], 'color' => $item->options['color']]])
        ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item has been Saved For Later!');
    }
}
