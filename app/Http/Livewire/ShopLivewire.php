<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use App\ProductSize;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShopLivewire extends Component
{
    public $requestedCategories = [];
    public $requestedSizes = [];    
    public $sort;
    public $sizes = [];
    public $sizesAll = [];
    public $min = 1;
    public $max = 5000;   

    public function mount()
    {
        $this->sizes=Size::all()->take(5);
        $this->sizesAll = Size::all()->skip(5);
    }

    public function render()
    {
        if($this->requestedCategories){
            $products = $this->filterProductsByCategories();
        }else{
            // $categoryName='Svi proizvodi';
            $products = DB::table('products');
        }

        $products = $this->filterByPriceRange($products);

        if($this->requestedSizes){
            $products = $this->filterBySize();
        }

        if($this->sort==='low_high') {
            $products=$products->orderBy('price')->paginate(9);

        }elseif($this->sort==='high_low') {
            $products=$products->orderBy('price','desc')->paginate(9);
            
        }elseif($this->sort==='a_to_z') {
            $products=$products->orderBy('name','asc')->paginate(9);
            
        }elseif($this->sort==='z_to_a') {
            $products=$products->orderBy('name','desc')->paginate(9);
            
        }elseif($this->sort==='newest') {
            $products=$products->orderBy('created_at','desc')->paginate(9);
            
        }else{
            $products=$products->inRandomOrder()->paginate(9);
        }

        return view('livewire.shop-livewire', [
            'products' => $products,
            // 'categoryIds' => $categoryIds 
        ]);
    }

    private function filterProductsByCategories()
    {
        $categories = (Category::whereIn('id', $this->requestedCategories))->get();
            foreach ($categories as $category) {                    
                $categoryIds[] = $category->getKey();                   
                $categoryIds[] = $category->descendants()->pluck('id');
            }   
            $categoryIds = array_unique(Arr::flatten($categoryIds));
                
        return Product::whereIn('category_id', $categoryIds);
        // $categoryName=optional($categories->where('id', $this->requestedCategory)->first())->name;
    }

    private function filterBySize()
    {
        $productIds = [];
        $productsSizes=(ProductSize::whereIn('size_id',$this->requestedSizes))->get();
        foreach($productsSizes as $ps){
            $productIds[]=$ps->product_id;
           }
        return Product::whereIn('id',$productIds);
    }

    private function filterByPriceRange($products)
    {
        return $products->whereBetween('price', [$this->min, $this->max]);  
    }
}
