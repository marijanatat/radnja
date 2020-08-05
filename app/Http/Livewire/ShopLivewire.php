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
use Livewire\WithPagination;

class ShopLivewire extends Component
{
    use WithPagination;

    public $requestedCategories = [];
    public $requestedSizes = [];    
    public $sort;
    public $sizes = [];
    public $sizesAll = [];
    public $min = 1;
    public $max = 5000; 
    public $productsPerPage = 12;
    // public $categoryName;  

    protected $updatesQueryString = [
        'category'
    ];

    public function mount()
    {
        if(request()->category){
            $this->requestedCategories[] = request()->category;
        }
          
        // $this->categoryName = optional(Category::where('id', request()->category)->first())->name;
        $this->sizes=Size::all()->take(5);
        $this->sizesAll = Size::all()->skip(5);
    }

    public function updatingProductsPerPage()
    {
        $this->resetPage();
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
            $products=$products->orderBy('price')->paginate($this->productsPerPage);

        }elseif($this->sort==='high_low') {
            $products=$products->orderBy('price','desc')->paginate($this->productsPerPage);
            
        }elseif($this->sort==='a_to_z') {
            $products=$products->orderBy('name','asc')->paginate($this->productsPerPage);
            
        }elseif($this->sort==='z_to_a') {
            $products=$products->orderBy('name','desc')->paginate($this->productsPerPage);
            
        }elseif($this->sort==='newest') {
            $products=$products->orderBy('created_at','desc')->paginate($this->productsPerPage);
            
        }else{
            $products=$products->inRandomOrder()->paginate($this->productsPerPage);
        }

        return view('livewire.shop-livewire', [
            'products' => $products,
            // 'categoryIds' => $categoryIds 
        ]);
    }

    public function filtriraj($id)
    {
        // $this->requestedCategories = []; 
        // $this->requestedCategories[] = $id;
        // $this->render();
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
