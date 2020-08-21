@extends('layouts.master')

{{-- @section('title', $product->name) --}}

@section('content')

    <div class="text-gray-700 hover:text-green-900">
        @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span><a href="{{ route('shop.index') }}">Shop</a></span>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{ $product->name }}</span>
    @endcomponent
    </div>

        <div class="container">
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
            @endif
    
            {{-- @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
        </div>

    <div class="product-section container grid-cols-1 md:grid-cols-2 p-4 md:p-4 mt-4">
        <div>
            <div class="product-section-image">
                {{-- <img src="{{asset('storage/'.$product->image)}}" alt="product"> --}}
                <img src="{{productImage($product->image)}}" alt="product" style="height:340px;" class="active" id="currentImage"> 
            </div>
         
            <div class="product-section-images ">
                 <div class="product-section-thumbnail selected" >
                    <img src="{{productImage($product->image)}}" alt="product" style="height:50px;" class="mx-auto"> 
                </div>

                @if ($product->images)
                    @foreach (json_decode($product->images,true)  as $image)  
                     <div class="product-section-thumbnail" >
                        <img src="{{productImage($image)}}" alt="product" style="height:50px;" class="mx-auto"> 
                     </div>
                    @endforeach
                @endif            
            </div>
            <hr class="bg-gray-500 border-dashed mt-4 mb-2">

              <p class="text-md text-gray-800 mt-4">
                {!!$product->description!!}
            </p> 
        </div>

        <div class="product-section-information -mt-16 lg:mt-1 ml-8 md:ml-4">
            <div class="product-section-subtitle text-gray-800 font-semibold ">{{$product->name}}</div>
            <hr class="bg-gray-500 border-dashed mt-3 mb-2">
            {{-- <div>{!!$stock!!}</div> --}}
            {{-- <div>{{$product->quantity}}</div> --}}
            <div class="product-section-price text-base text-red-800 mb-2"><span class="text-sm text-gray-800">Cena:</span>  {{$product->presentPrice()}}</div>
          
            <form action="{{route('cart.store')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                 <input type="hidden" name="name"  value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <hr class="bg-gray-500 border-dashed mb-2">
                <h3 class="text-gray-800 uppercase text-sm font-semibold mb-1">Raspoložive boje</h3>
    
                 <div class="relative flex items-start pb-2">
                     
                     @if ($product->colors->count() > 1)
                     @foreach ($product->colors as $color)
                     <div class="flex flex-col justify-center mr-4">
                         
                         <label for="{{$color->id}}" class="color-label">
                            <input type="radio" id="{{$color->id}}" name="color" value="{{$color->name}}" {{(old('color') == $color->name) ? 'checked' : ''}}>
                            <span class="color-custom" style="background-color: {{$color->value}}">
                                <span class="tooltiptext text-sm font-semibold pt-2">{{$color->name}}</span>
                            </span>
                            
                        </label>
                    </div>
                    @endforeach 
                    
                    @error('color')
                    <div class="absolute right-0 text-red-500 text-sm ">{{ $message }}</div>
                    @enderror
                    
                    @else
                        <label for="{{$product->colors->first()->id}}" class="color-label">
                            <input type="hidden" id="{{$product->colors->first()->id}}" name="color" value="{{$product->colors->first()->name}}">
                            <span class="color-custom" style="background-color: {{$product->colors->first()->value}}">
                                <span class="tooltiptext text-sm font-semibold pt-2">{{$product->colors->first()->name}}</span>
                            </span>
                            
                        </label>
                    @endif
                 </div> 
              
      
                 <hr class="bg-gray-500 border-dashed mt-4 mb-2">
                 @if ($product->sizes->count() > 0)
                     
                 <h3 class="text-gray-800 uppercase text-sm font-semibold mb-1">Raspoložive veličine</h3>
                
                 
                 <div class="flex relative items-start mb-8">
                    @if ($product->sizes->count() > 1)
                     @foreach ($product->sizes as $size)                      
                     <label for="{{$size->value}}" class="velicina-label">
                        <input type="radio" id="{{$size->value}}" name="size" value="{{$size->value}}" {{(old('size') == $size->value) ? 'checked' : ''}}>
                        <span class="velicina-custom text-base bg-gray-400 hover:bg-gray-900 hover:text-white">{{$size->value}}</span>
                    </label>
                    @endforeach 
                    
                    @error('size')
                    <div class="absolute right-0 text-red-500 text-sm ">{{ $message }}</div>
                    @enderror

                @else    
                    <label for="{{$product->sizes->first()->value}}" class="velicina-label">
                        <input type="hidden" id="{{$product->sizes->first()->value}}" name="size" value="{{$product->sizes->first()->value}}">
                        <span class="velicina-custom text-base bg-gray-400 hover:bg-gray-900 hover:text-white">{{$product->sizes->first()->value}}</span>
                    </label>
                 @endif
                    
                </div> 
                @else 
                <input type="hidden" id="" name="size" value="-">
                @endif
                
                <h3 class="text-gray-800 uppercase text-sm font-semibold">Količina</h3>
                 <div class="flex items-start mb-4" x-data="counter()">
                     <button type="button" class="bg-white p-1 mr-1 hover:bg-gray-300" style="border: solid 1px gray" x-on:click="decrement()"><i class="fa fa-minus" aria-hidden="true"  ></i></button>
                     <input class="bg-white px-2 py-1 mr-1 w-8 text-center" style="border: solid 1px gray;" name="quantity" x-bind:value="count"/>     
                     <button type="button" class="bg-white p-1 mr-1 hover:bg-gray-300" style="border: solid 1px gray" x-on:click="increment()"><i class="fa fa-plus" aria-hidden="true"  ></i></button>
                 </div>

                <button type="submit" class="text-md text-white px-2 py-1 button button-plain transition duration-500 ease-in-out border border-gray-300 shadow-md rounded-md bg-boja hover:bg-bojasvetla transform hover:-translate-y-1 hover:scale-110 ...">Dodaj u korpu</button>

             </form>
        </div>
    </div> <!-- end product-section -->

    @include('partials.might-like')
    @endsection
  
    
    
@section('extra-js')

 <script>
    (function(){
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');
        images.forEach((element) => element.addEventListener('click', thumbnailClick));
        function thumbnailClick(e) {
            currentImage.classList.remove('active');
            currentImage.addEventListener('transitionend', () => {
                currentImage.src = this.querySelector('img').src;
                currentImage.classList.add('active');
            })
            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
        }
    })();

    function counter() {        
        return {
          count: 1,
            increment() {
            this.count++;            
          },
        
          decrement() {
            if(this.count>1){
            this.count--;           
            };
          
          }

        };
      };
</script>
@endsection

