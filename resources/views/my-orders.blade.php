@extends('layouts.master')

@section('title', 'My orders')


@section('content')

@component('components.breadcrumbs')
        <a href="/">Početna strana</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Moje porudžbine</span>
    @endcomponent

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

    <div class="products-section my-orders  grid-cols-1 md:grid-cols-3 -mt-4 grid-gap-10">
        <div class="sidebar grid mt-4  ">

            <ul class="text-gray-700">
              <li><a href="{{ route('users.edit') }}">Moj nalog</a></li>
              <li class="active"><a href="{{ route('orders.index') }}">Moje porudžbine</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile mt-2 ml-8 md:ml-2">
            <div class="products-header">
                <h1 class="text-boja font-bold mb-2">Moje poružbine</h1>
            </div>

            <div class="mx-8 md:mx-2 -mt-16 md:mt-4">
                @foreach ($orders as $order)
                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                <div class="text-base md:uppercase font-bold text-gray-800">Order Placed</div>
                                <div>{{ presentDate($order->created_at) }}</div>
                            </div>
                            <div>
                                <div class="text-base md:uppercase  font-bold text-gray-800">Order ID</div>
                                <div>{{ $order->id }}</div>
                            </div><div>
                                <div class="text-base md:uppercase  font-bold text-gray-800">Total</div>
                                <div class="text-base">{{ presentPrice($order->billing_total) }}</div>
                               
                            </div>
                        </div>
                        <div>
                            <div class="order-header-items">
                                <div><a href="{{ route('orders.show', $order->id) }}" class="text-boja font-bold hover:text-gray-800">Order Details</a></div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="order-products">
                        @foreach ($order->products as $product)
                            <div class="order-product-item">
                                {{-- helper metoda product image --}}
                                <div>
                                    <img src="{{ productImage($product->image) }}" alt="Product Image">
                                </div>
                                <div>
                                    <div>
                                        <a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
                                    </div>
                                    <div>{{ presentPrice($product->price) }}</div>
                                    <div>Količina: {{ $product->pivot->quantity }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div> <!-- end order-container -->
                @endforeach
            </div>

            <div class="spacer"></div>
        </div>
    </div>

@endsection
