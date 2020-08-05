<div class="">

    <div class="">
        @component('components.breadcrumbs')
       <a href="/">Home</a>
       <i class="fa fa-chevron-right breadcrumb-separator"></i>
       <span>Shop</span>
       @endcomponent 
    </div>
    
        <div class="container">
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
        
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="container flex justify-end text-sm pt-8 pb-2">
            
            {{-- <h1 class="stylish-heading font-bold text-2xl pt-2 mr-auto" wire:model="categoryName">{{$categoryName}}</h1> --}}
            
            <div class="mr-6">
                <label for="sortiranje" class="font-bold">Sortiraj:</label>
                <select wire:model.debounce.0ms="sort" name="sortiranje">
                    <option value="popular">Najpopularnije</option>  
                    <option value="low_high">Po ceni rastuće</option>
                    <option value="high_low">Po ceni opadajuće</option>
                    <option value="a_to_z">Po nazivu (A-Š)</option>
                    <option value="z_to_a">Po nazivu (Š-A)</option>
                    <option value="newest">Najnovije</option>
                </select>
            </div>
            <div>
                <label for="prikazi" class="font-bold">Prikaži po strani:</label>
                <select name="prikazi" wire:model.debounce0ms="productsPerPage">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                </select>
            </div>
        </div>

        <hr class="mb-3">

    <div class="flex px-16 pb-16">
        <div class="flex h-screen w-64">
            <div class="w-1/4 flex-1 flex overflow-hidden">
                <div class="flex-1 overflow-y-scroll">
                    <h3 class="uppercase">Kategorije</h3>
                    <hr class="mb-3">
                @foreach ($categories as $category)
                    <div x-data="{open: false}">
                            <div class="">
                                <div class="duration-500 transform hover:translate-x-1" @click="open=!open">
                                    {{-- <input class="w-4" type="checkbox" id="{{$category->id}}" value="{{$category->id}}" wire:model="requestedCategories"> --}}
                                    <button class="font-bold text-sm text-gray-700 cursor-pointer focus:outline-none" wire:click="filtriraj({{$category->id}})">{{$category->name}}
                                    <i x-show="!open" class="fa fa-angle-double-right text-gray-700 cursor-pointer" aria-hidden="true"></i>
                                    <i x-show="open" class="fa fa-angle-double-down text-gray-700 cursor-pointer" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                                    <div x-show="open" x-cloak
                                    x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform -translate-y-3"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-end="opacity-0 transform -translate-y-3"    
                                    >
                                            
                                        @foreach ($category->children as $children)
        
                                            <div class="flex-col">
                                                <div class="pl-6">
                                                    <span class="uppercase italic text-sm font-bold text-gray-700">{{$children->name}}</span>
                                                </div>
                                            </div>
                                                @foreach ($children->children as $ch)
        
                                                <div class="flex-col">
                                                    <label class="hover:bg-gray-300 pl-12 text-sm text-gray-700">
                                                        <input class="w-4 pt-5" type="checkbox" id="{{$ch->id}}" value="{{$ch->id}}" wire:model="requestedCategories">
                                                        <span>{{$ch->name}}</span>
                                                    </label>
                                                </div>
        
                                                @endforeach
                                            @endforeach
                                            
                                    </div>
                                </div>
                                @endforeach

                                <h3 class="mt-10 uppercase">Veličine</h3>
                                <hr>
                                <div class="bg-gray-300 border-solid border-1 border-gray-600 w-20 h-auto rounded-t-lg mt-4">
                                    <div class="flex flex-col  items-start  ml-4 justify-center " >
                                        @foreach ($sizes as $size)
                                        <div class="flex flex-col w-12 max-h-full">
                                            <label class="inline-flex items-center  text-sm">
                                                <input type="checkbox" class="form-checkbox h-3 w-3 text-gray-600 text-sm " id="{{$size->id}}" value="{{$size->id}}" wire:model="requestedSizes">
                                                <li class="list-none ml-2">{{$size->value}}</li>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                        
                                    <div x-data="{ open: false }" class="flex flex-col items-start ml-4 justify-center">
                                        @foreach ($sizesAll as $size)
                                        
                                        <div class="flex flex-col w-12 max-h-full" x-show="open">
                                            <label class="inline-flex items-center  text-sm">
                                                <input type="checkbox" class="form-checkbox h-3 w-3 text-gray-600 text-sm " id="{{$size->id}}" value="{{$size->id}}" wire:model="requestedSizes">
                                                <li class="list-none ml-2">{{$size->value}}</li>
                                            </label>
                                        </div>
                                        
                                        @endforeach
                                            
                                        <button type="" @click="open = !open"  type="button" 
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded "  x-html="open ? `<i class='fa fa-angle-double-up'></i>` :`<i class='fa fa-angle-double-down'></i>`"> </button>
                                        
                                     </div>  
                                </div>

                                <h3 class="uppercase mt-10">Cena:</h3>
                                <hr class="mb-3">
                                <div class="slidecontainer w-auto text-sm">
                                    <div class="mb-3">Opseg od {{presentPrice($min)}} do {{presentPrice($max)}}</div>
                                    <div data-role="main" class="ui-content">
                                        <div data-role="rangeslider">
                                            <label for="price-min">Minimalna cena:</label>
                                            <input type="range" name="price-min" id="price-min" wire:model.debounce.0ms="min" min="0" max="5000"><br>
                                            <label for="price-max">Maksimalna cena:</label>
                                            <input type="range" name="price-max" id="price-max" wire:model.debounce.0ms="max" min="0" max="5000">
                                        </div>
                                    </div>
                                </div>

                </div>
            </div>
        </div>
            
            
            
            {{-- <div class="flex-col">
                <h1>Requested Categories: {{implode(', ',$requestedCategories)}}</h1>
                <h1>Ids: {{implode(', ', Arr::flatten($categoryIds))}}</h1>
                
            </div> --}}
            {{-- <div class="w-2/3 justify-center">
                @foreach ($products as $product)
                <div class="list-none">
                    <li>{{$product->name}}</li>
                </div>
                @endforeach
            </div> --}}
            <div id="proizvodi" class="w-3/4 md:grid md:grid-cols-3 md:min-h-0 md:min-w-0 row-gap-12 col-gap-8 text-center mx-auto pl-10" >

                @forelse ($products as $product)
                <div class="" id="">
                    <a href="{{route('shop.show',$product->slug)}}"><img class="h-32 md:h-auto" src="{{productImage($product->image)}}"
                            alt="product"></a>
                    <a href="{{route('shop.show',$product->slug)}}">
                        <div class="">{{$product->name}}</div>
                    </a>
                    <div>{{presentPrice($product->price)}}</div>
                </div>
                @empty
                <div style="text-align:left; color:gray">No items in this category</div>
                @endforelse
    
             
            </div> <!-- end products -->
        </div>
                        <div class="spacer container flex justify-end">
                            {{$products->links('pagination.livewire-tailwind')}}
                            {{-- {{ $products->appends(request()->input())->links() }} --}}
                        </div>
</div>