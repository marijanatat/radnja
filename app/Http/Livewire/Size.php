<?php

namespace App\Http\Livewire;

use App\Product;
use App\ProductSize;
use App\Size as AppSize;
use Livewire\Component;

class Size extends Component
{

    public $sizes=[];
    public $sizesAll = [];
    public $requestedSizes=[];
    public $requestProducts = [];


    public function clear()
     { 
      $this->requestedProducts=[];
      
     }

    public function mount()
    {
         $this->clear();
        $this->sizes=AppSize::all()->take(5);
        $this->sizesAll = AppSize::all()->skip(5);
    }

    
    public function render()
     {
         $productIds = [];
        if($this->requestedSizes){
            $productsSizes=(ProductSize::whereIn('size_id',$this->requestedSizes))->get();
        foreach($productsSizes as $ps){
            $productIds[]=$ps->product_id;
           }
        $products=Product::whereIn('id',$productIds)->get();
        }else
        {
            $products=Product::all();
        }

        return view('livewire.size',[
            'products'=>$products,
            'productIds'=>$productIds
        ]);
    }
}
