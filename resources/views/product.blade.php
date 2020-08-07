@extends('layouts.master')

{{-- @section('title', $product->name) --}}

@section('extra-css')
    <style>

    .radio-label {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;    
    }

    .radio-label input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .radio-custom {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        border-radius: 50%;
        border: 1px solid grey;
    }

    .radio-label:hover input ~ .radio-custom{
        background-color: red;
    }

    .radio-label input:checked ~ .radio-custom{
        border: 2px solid rgb(159, 219, 103);
    }

    .radio-custom:after {
        content: "";
        position: absolute;
        display: none;
    }

    .radio-label input:checked ~ .radio-custom:after {
        /* display: block; */
    }

    .radio-label .radio-custom:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }

    .radio-custom .tooltiptext {
        bottom:30px;
        left: -45px;
        visibility: hidden;
        background-color: #2f312f;
        color: orange;
        clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%);
        width: 80px;
        height: 40px;
        text-align: center;
        padding: 5px 0;
        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .radio-custom:hover .tooltiptext {
        visibility: visible;
    }

    </style>
@endsection

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

        <div class="product-section-information -mt-16 lg:mt-1">
            <div class="product-section-subtitle text-gray-800 font-semibold ">{{$product->name}}</div>
            <hr class="bg-gray-500 border-dashed mt-4 mb-2">
            {{-- <div>{!!$stock!!}</div> --}}
            {{-- <div>{{$product->quantity}}</div> --}}
            <div class="product-section-price text-base text-red-800"><span class="text-sm text-gray-800">Cena:</span>  {{$product->presentPrice()}}</div>

            <hr class="bg-gray-500 border-dashed mb-2">
            <h3 class="text-gray-800 uppercase text-sm font-semibold">Izaberite boju</h3>

             <div class="flex items-start ">
                @foreach ($product->colors as $color)
                    <div class="flex flex-col justify-center mr-4">
                        
                        <span class="font-mono text-xs">{{$color->name}}</span>    
                        <label for="{{$color->id}}" class="radio-label">
                        <input type="radio" id="{{$color->id}}" name="color" value="{{$color->id}}">
                        <span class="radio-custom" style="background-color: {{$color->value}}">
                            <span class="tooltiptext text-sm font-semibold pt-2">{{$color->name}}</span>
                        </span>
                    </label>
                  </div>
                @endforeach 
             </div> 
  
             <hr class="bg-gray-500 border-dashed mt-4 mb-2">
            <h3 class="text-gray-800 uppercase text-sm font-semibold">Izaberite veličinu</h3>

             <div class="flex items-start ">
                @foreach ($product->sizes as $size)
                    <div class="flex flex-col justify-content-start mr-4">
                        {{-- <span>{{$size->name}}</span>              --}}
                        <button class=" h-8 w-8 mb-8 rounded-full bg-gray-400 hover:bg-gray-900 hover:text-white " id="{{$size->id}}">{{$size->value}}</button> 
                  </div>
                @endforeach 
             </div> 

             <h3 class="text-gray-800 uppercase text-sm font-semibold">Količina</h3>
             <div class="flex items-start mb-4">
                 <div class="bg-white p-1 mr-1 hover:bg-gray-300" style="border: solid 1px gray"><i class="fa fa-minus" aria-hidden="true"></i></div>
                 <div class="bg-white px-2 py-1 mr-1 w-8 text-center" style="border: solid 1px gray">1</div>
                 <div class="bg-white p-1 mr-1 hover:bg-gray-300" style="border: solid 1px gray"><i class="fa fa-plus" aria-hidden="true" ></i></div>
             </div>
         
            {{-- <p class="text-xs text-gray-800">
                {!!$product->description!!}
            </p> --}}
    
            @if ($product->quantity>0)
            <form action="{{route('cart.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$product->id}}">
                 <input type="hidden" name="name"  value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                {{-- <input type="hidden" name="size" value="{{$size->value}}">
                <input type="hidden" name="color" value="{{$color->name}}">
                <input type="hidden" name="quantity" value="{{$quantity}}">
                 --}}
                <button type="submit" class="text-md text-white px-2 py-1 button button-plain transition duration-500 ease-in-out border border-gray-300 shadow-md rounded-md bg-boja hover:bg-bojasvetla transform hover:-translate-y-1 hover:scale-110 ...">Dodaj u korpu</button>

             </form>
            @endif

          
       
        </div>
    </div> <!-- end product-section -->

    @include('partials.might-like')
    @endsection
  
    
    
@section('extra-js')

    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{asset('js/algolia.js')}}"></script>

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
</script>
@endsection

