<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class SaveForLaterController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return back()->with('success_message', 'Proizvod je uklonjen!');
    }

     /**
     * Switch item from Save for Later to Cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('saveForLater')->get($id);
        Cart::instance('saveForLater')->remove($id);    

        $duplicates = Cart::instance('default')->search(function($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Proizvod se već nalazi u Vašoj korpi!');
        }

        Cart::instance('default')->add(['id' => $item->id, 'name' => $item->name, 
                        'qty' => $item->qty, 'price' => $item->price, 
                        'weight' => 0, 'options' => ['size' => $item->options['size'], 'color' => $item->options['color']]])
        ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Proizvod je premešten u korpu!');
    }
}
