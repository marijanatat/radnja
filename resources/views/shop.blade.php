@extends('layouts.master')

@section('title', 'Products')


@section('content')

<div class="mt-20">
    @component('components.breadcrumbs')
   <a href="/">Home</a>
   <i class="fa fa-chevron-right breadcrumb-separator"></i>
   <span>Otkazivanje</span>
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
    <div class="sidebar">
        <h3>By Category</h3>
        <ul>
            @foreach ($categories as $category)
            <button class="{{request()->category==$category->id ? 'active':''}}">{{$category->name}}</button>
                @foreach ($category->children as $child)
                    <li class="{{request()->category==$child->id ? 'active':''}}"><a
                        href="{{route('shop.index',['category'=>$child->id])}}"> - {{$child->name}}</a>
                        @foreach ($child->children as $ch)
                            <li class="{{request()->category==$ch->id ? 'active':''}}"><a
                                href="{{route('shop.index',['category'=>$ch->id])}}">&nbsp;&nbsp; - {{$ch->name}}</a>
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
                <strong style="font: bold;font-size:20px;margin-righ:2px">Price :</strong>
                <a href="{{route('shop.index',['category'=>$category->category,'sort'=>'low_high'])}}"
                    style="font-size:15px">Low to high |</a>
                <a href="{{route('shop.index',['category'=>$category->category,'sort'=>'high_low'])}}"
                    style="font-size:15px">High to low</a>
            </div>
        </div>

        <div class="products text-center">

            @forelse ($products as $product)
            <div class="product">
                {{-- <a href="{{route('shop.show',$product->slug)}}"><img src="{{productImage($product->image)}}" style="height:140px;"
                        alt="product"></a> --}}
                <a href="{{route('shop.show',$product->slug)}}">
                    <div class="product-name">{{$product->name}}</div>
                </a>
                <div class="product-price">{{presentPrice($product->price)}}</div>
            </div>
            @empty
            <div style="text-align:left; color:gray">No items in this category</div>
            @endforelse

         
        </div> <!-- end products -->
        <div class="spacer">
            {{-- {{$products->links()}} --}}
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>
</div>


@endsection
