@extends('layouts.master')

@section('title', 'Products')


@section('content')

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

    <div class="products-section container">
        <div class="">
            <h3 class="uppercase pb-4">Kategorije</h3>
            <ul class="text-sm">
                @foreach ($categories as $category)
                <li class="{{request()->category==$category->id ? 'active':''}}  pb-2">
                    <a href="{{route('shop.index', ['category'=>$category->id])}}" class="text-base font-bold">{{$category->name}}</a></li>
                    @foreach ($category->children as $child)
                        <li class="{{request()->category==$child->id ? 'active':''}}"><a
                        href="{{route('shop.index',['category'=>$child->id])}}" class="pl-6 {{!$child->isLeaf() ? 'italic uppercase' : ''}}">{{$child->name}}</a>
                            @foreach ($child->children as $ch)
                                <li class="{{request()->category==$ch->id ? 'active':''}}"><a
                                    href="{{route('shop.index',['category'=>$ch->id])}}" class="pl-12">{{$ch->name}}</a>
                            @endforeach
                        </li>
                    @endforeach   
                 </li>
    
                @endforeach
            </ul>
        </div> <!-- end sidebar -->
        <div>
        <div class="products-header">
            <h1 class="stylish-heading font-bold text-2xl pt-2">{{$categoryName}}</h1>
            <div>
                <strong style="font: bold;font-size:20px;margin-righ:2px">Cena :</strong>
                <a href="{{route('shop.index',['category'=>$category->category,'sort'=>'low_high'])}}"
                    style="font-size:15px">Low to high |</a>
                <a href="{{route('shop.index',['category'=>$category->category,'sort'=>'high_low'])}}"
                    style="font-size:15px">High to low</a>
            </div>
        </div>

        <div class="products text-center">

            @forelse ($products as $product)
            <div class="product">
                <a href="{{route('shop.show',$product->slug)}}"><img src="{{productImage($product->image)}}" style="height:140px;"
                        alt="product"></a>
                <a href="{{route('shop.show',$product->slug)}}">
                    <div class="product-name">{{$product->name}}</div>
                </a>
                <div class="product-price">{{presentPrice($product->price)}}</div>
            </div>
            @empty
            <div style="text-align:left; color:gray">U ovoj kategoriji nema artikala. <br>Pogledajte naše druge proizvode!</div>
            @endforelse

         
        </div> <!-- end products -->
        <div class="spacer">
            {{-- {{$products->links()}} --}}
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>
</div>


@endsection
