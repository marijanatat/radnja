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
        $request->validate([
            'quantity' => 'required|numeric|between:1,5',
            'size' => 'required',
            'color' => 'required',
        ],
        [
            'size.required' => 'Morate izabrati veličinu!',
            'color.required' => 'Morate izabrati boju!',
            'quantity.between' => 'Količina ne može biti veća od 5',
        ]);

        $duplicates=Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect(route('cart.index'))->with('success_message','Proizvod je već u Vašoj korpi.');
        }

        if(Product::find($request->id)->quantity < $request->quantity){
            return redirect()->back()->with('error_quantity','Trenutno nemamo traženu količinu na lageru');
        }
        
        Cart::add(['id' => $request->id, 'name' => $request->name, 'qty' => $request->quantity, 'price' => $request->price, 'weight' => 0, 'options' => ['size' => $request->size, 'color' => $request->color ]])
                
            ->associate('App\Product');               

        return redirect(route('cart.index'))->with('success_message','Proizvod je dodat u korpu');
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
            'quantity' => 'required|numeric|between:1,5',
           
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Količina mora biti između 1 i 5.']));
            return response()->json(['success' => false], 400);
        }

        if ($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['Trenutno nemamo traženu količinu proizvoda na lageru.']));
            return response()->json(['success' => false], 400);
        }


        Cart::update($id,$request->quantity);
        session()->flash('success_message', 'Količina je uspešno promenjena!');
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
        return back()->with('success_message','Proizvod je uklonjen iz korpe!');
    }

    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);
        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Ovaj proizvod ste već sačuvali za kasnije!');
        }

        Cart::instance('saveForLater')->add(['id' => $item->id, 'name' => $item->name, 
                       'qty' => $item->qty, 'price' => $item->price, 
                       'weight' => 0, 'options' => ['size' => $item->options['size'], 'color' => $item->options['color']]])
        ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Proizvod je sačuvan za kasnije!');
    }
}
