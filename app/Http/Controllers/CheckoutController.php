<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\OrderPlaced;
use App\Order;
use App\OrderProduct;
use App\Product;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class CheckoutController extends Controller
{

    public function index()
    {
        if (Cart::instance('default')->count() == 0) {
            return redirect()->route('shop.index');
        }

        if (auth()->user() && request()->is('guestCheckout')) {
            return redirect()->route('checkout.index');
        }

        return view('checkout');
    }


    public function create()
    {
        //
    }


    public function store(CheckoutRequest $request)
    {
        if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Proizvod više nije dopstupan!');
        }
        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug . ', ' . $item->qty;
        })->values()->toJson();
        
        try {           
            
            $order = $this->addToOrdersTable($request, null);
            Mail::to($request->email)
                ->to('mobing.odzaci@outlook.com')
                ->to('tatalovicmarijana@gmail.com')               
                    ->queue(new OrderPlaced($order));

            Cart::instance('default')->destroy();

            return redirect()->route('confirmation.index')->with('success_message', 'Hvala Vam! Vaša naružba je primljena');
        } catch (Exception $e) {
            $this->addToOrdersTable($request, 'Došlo je do greške! Vaša narudžba nije primljena!');
            return back()->withErrors('Greška! ' . 'Vaša narudžba nije prihvaćena.');
        }
    }
    protected function productsAreNoLongerAvailable()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);
            if ($product->quantity < $item->qty) {
                return true;
            }
        }

        return false;
    }

    protected function addToOrdersTable($request, $error)
    {
        
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_state' => $request->state,
            'billing_postalcode' => $request->postalcode,
            'billing_napomena' => $request->napomena,
            'billing_total' => Cart::total(2, '.', ''),
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
                'size' => $item->options['size'],
                'color' => $item->options['color'],
            ]);
        }

        return $order;
    }

    protected function decreaseQuantities()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);
            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
