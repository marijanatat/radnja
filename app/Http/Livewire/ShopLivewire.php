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
    public $categoryQuery;
    public $requestedSizes = [];    
    public $sort;
    public $sizes = [];
    public $sizesAll = [];
    public $min;
    public $max; 
    public $productsPerPage = 12;
    public $search;
    protected $products;

    protected $listeners = ['searched'];

    public function searched($search)
    {
        $this->search = $search;
        $this->min = $this->loadMinPrice();
        $this->max = $this->loadMaxPrice();
        $this->requestedSizes = [];
    }
    
    protected $updatesQueryString = [
        'category',
        'search' => ['except' => '']
    ];

    public function mount()
    {
        $this->min = $this->loadMinPrice();
        $this->max = $this->loadMaxPrice();

        $this->categoryQuery = request()->category;    

        if(request()->search){
            $this->search = request()->search;
        }
        $this->sizes=Size::all()->take(5);
        $this->sizesAll = Size::all()->skip(5);
    }
    
    public function updatingProductsPerPage()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSort()
    {
        $this->resetPage();
    }

    public function updatingRequestedCategories()
    {
        $this->resetPage();
    }

    public function updatingRequestedSizes()
    {
        $this->resetPage();
    }

    public function updatingMin()
    {
        $this->resetPage();
    }

    public function updatingMax()
    {
        $this->resetPage();
    }

    public function resetQueries()
    {
        $this->requestedCategories = [];
        $this->search = '';    
        $this->min = $this->loadMinPrice();
        $this->max = $this->loadMaxPrice();
        $this->requestedSizes = [];
        $this->categoryQuery = '';
        $this->resetPage();

    }

    public function clearSearch()
    {
        $this->search = '';
    }

    public function clearCategoryQuery()
    {
        $this->categoryQuery = '';
    }

    public function clearRequestedCategories($reqCat)
    {
        if (($key = array_search($reqCat, $this->requestedCategories)) !== false) {
            unset($this->requestedCategories[$key]);
        }
    }

    public function render()
    {
        if($this->requestedCategories){
            $this->products = $this->filterProductsByCategories();
        }else if($this->categoryQuery){
            $this->products = $this->filterProductsByCategories($this->categoryQuery);
        } else {
            $this->products=DB::table('products');
        }

        $this->products = $this->filterByPriceRange($this->products);

        if($this->requestedSizes){
            $this->products = $this->filterBySize($this->products);
        }
        
        if(!empty($this->search)){
            $this->products = $this->filterBySearch($this->products);
        }

        if($this->sort==='low_high') {
            $this->products=$this->products->orderBy('price')->paginate($this->productsPerPage);

        }elseif($this->sort==='high_low') {
            $this->products=$this->products->orderBy('price','desc')->paginate($this->productsPerPage);
            
        }elseif($this->sort==='a_to_z') {
            $this->products=$this->products->orderBy('name','asc')->paginate($this->productsPerPage);
            
        }elseif($this->sort==='z_to_a') {
            $this->products=$this->products->orderBy('name','desc')->paginate($this->productsPerPage);
            
        }elseif($this->sort==='popular') {
            $this->products=$this->products->orderBy('quantity', 'desc')->paginate($this->productsPerPage);

        }else{
            $this->products=$this->products->orderBy('created_at','desc')->paginate($this->productsPerPage);
        }

        $this->sizes = $this->getSizesForProducts($this->products);
       
        return view('livewire.shop-livewire', [
            'products' => $this->products,
        ]);
    }

    public function filterBySearch($products)
    {
        $searched_products = $products->where('name','like','%' . $this->search . '%')
                ->orWhere('description','like','%' . $this->search . '%')
                ->orWhere('details','like','%' . $this->search . '%');
        $byPrice = $this->filterByPriceRange($searched_products);
        if($this->requestedSizes){
            $searched_products = $this->filterBySize($byPrice);
        }     
        return $searched_products;
    }

    private function filterProductsByCategories($request = null)
    {
        if($request){
            $category = Category::where('slug', '=', $request)->first();
            $categoryIds[] = $category->id;
            if(!$category->isLeaf())
            {
                $categoryIds[] = $category->getKey();
                $categoryIds[] = $category->descendants()->pluck('id');
                $categoryIds = array_unique(Arr::flatten($categoryIds));
            }
        } else {
        $categories = (Category::whereIn('slug', $this->requestedCategories))->get();
            foreach ($categories as $category) {                    
                $categoryIds[] = $category->getKey();                   
                $categoryIds[] = $category->descendants()->pluck('id');
            }   
            $categoryIds = array_unique(Arr::flatten($categoryIds));
        }
        return Product::whereIn('category_id', $categoryIds);
    }

    private function filterBySize($products)
    {
        $productIds = [];
        $productsSizes=(ProductSize::whereIn('size_id',$this->requestedSizes))->get();
        foreach($productsSizes as $ps){
            $productIds[]=$ps->product_id;
           }
        return $products->whereIn('id',$productIds);
    }

    private function filterByPriceRange($products)
    {
        return $products->whereBetween('price', [$this->min, $this->max]);  
    }

    private function getSizesForProducts($products)
    {
        $sizesId = [];
        foreach ($products as $product) {
            $sizesOfProducts[] = DB::table('product_sizes')->where('product_id', $product->id)->pluck('size_id');
                            
            $sizesId = array_unique(Arr::flatten($sizesOfProducts));
        }
        if(count($sizesId) > 0){
            return Size::whereIn('id', $sizesId)->get();
        }
        return Size::all();
    }

    private function loadMaxPrice()
    {
        return Product::max('price');
    }

    private function loadMinPrice()
    {
        return Product::min('price');
    }
}
