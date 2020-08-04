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
    

    <div class="flex p-16">
        <div class="flex h-screen w-64">
            <div class="w-1/4 flex-1 flex overflow-hidden">
                <div class="flex-1 overflow-y-scroll">
                    <h3 class="uppercase pb-4">Kategorije</h3>
                @foreach ($categories as $category)
                    <div x-data="{open: false}">
                            <div class="">
                                <div class="duration-500 transform hover:translate-x-1" @click="open=!open">
                                    {{-- <input class="w-4" type="checkbox" id="{{$category->id}}" value="{{$category->id}}" wire:model="requestedCategories"> --}}
                                    <span class="font-bold text-sm text-gray-700 cursor-pointer">{{$category->name}}
                                    <i x-show="!open" class="fa fa-angle-double-right text-gray-700 cursor-pointer" aria-hidden="true"></i>
                                    <i x-show="open" class="fa fa-angle-double-down text-gray-700 cursor-pointer" aria-hidden="true"></i>
                                    </span>
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
            <div class="w-3/4 md:grid md:grid-cols-3 md:min-h-0 md:min-w-0 row-gap-12 col-gap-8 text-center mx-auto pl-10">

                @forelse ($products as $product)
                <div class="">
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
</div>