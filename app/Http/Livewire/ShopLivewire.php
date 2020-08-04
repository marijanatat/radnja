<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShopLivewire extends Component
{
    public $requestedCategories = [];
    // public $categoryIds = [];    
    public $sort;
    public $page;
   

    public function mount()
    {

    }

    public function render()
    {
        $categories = Category::get();
        $categoryIds = [];
            if($this->requestedCategories){
                $categories = (Category::whereIn('id', $this->requestedCategories))->get();
                foreach ($categories as $category) {                    
                    $categoryIds[] = $category->getKey();                   
                    $categoryIds[] = $category->descendants()->pluck('id');
                }   
                $categoryIds = array_unique(Arr::flatten($categoryIds));
                  
            $products = Product::whereIn('category_id', $categoryIds);
            // $categoryName=optional($categories->where('id', $this->requestedCategory)->first())->name;
        }else{
            $categoryName='Svi proizvodi';
            $products = DB::table('products');
        }

        if($this->sort==='low_high') {
            $products=$products->orderBy('price')->paginate(9);

        } elseif($this->sort==='high_low') {
            $products=$products->orderBy('price','desc')->paginate(9);
        }else{
            $products=$products->paginate(9);
        }

        return view('livewire.shop-livewire', [
            'products' => $products,
            'categoryIds' => $categoryIds 
        ]);
    }
}
