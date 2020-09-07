@extends('layouts.master')

{{-- @section('title', 'My Order') --}}


@section('content')

    @component('components.breadcrumbs')
        <a href="/">Početna strana</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Moja porudžbina</span>
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

    <div class="products-section my-orders container">
        <div class="sidebar -mt-16">

            <ul class="text-base md:text-xl text-gray-700">
              <li><a href="{{ route('users.edit') }}">Moj nalog</a></li>
              <li class="active"><a href="{{ route('orders.index') }}">Moje porudžbine</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile mt-4 md:-mt-8">
            <div class="products-header -mt-16 ml-4">
                <h1 class="mb-2 font-bold text-boja text-xl">Identifikacioni broj porudžbine: {{ $order->id }}</h1>
            </div>

            <div class="-mt-8 md:mt-4 mx-4">
                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                <div class="uppercase font-bold text-gray-800">Porudžbina napravljena:</div>
                                <div class="text-base md:uppercase f text-gray-800">{{ presentDate($order->created_at) }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold text-gray-800">Identifikacioni broj porudžbine:</div>
                                <div class="text-base   text-gray-800">{{ $order->id }}</div>
                            </div><div>
                                <div class="uppercase font-bold text-gray-800">Ukupno:</div>
                                <div class="text-base text-gray-800">{{ presentPrice($order->billing_total) }}</div>
                            </div>
                        </div>
                        {{-- <div>
                            <div class="order-header-items">
                                <div><a href="#">Invoice</a></div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="order-products">
                        <table class="table" style="width:50%">
                            <tbody>
                                <tr>
                                    <td>Ime i prezime</td>
                                    <td>{{ $order->user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Adresa</td>
                                    <td>{{ $order->billing_address }}</td>
                                </tr>
                                <tr>
                                    <td>Grad</td>
                                    <td>{{ $order->billing_city }}</td>
                                </tr>
                               
                                <tr>
                                    <td>Ukupno za plaćanje</td>
                                    <td>{{ presentPrice($order->billing_total) }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div> <!-- end order-container -->

                <div class="order-container -mt-4">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                Poručeni proizvodi
                            </div>

                        </div>
                    </div>
                    <div class="order-products">
                        @foreach ($products as $product)
                            <div class="order-product-item">
                                <div><img src="{{ productImage($product->image) }}" alt="Product Image"></div>
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
            </div>

            <div class="spacer"></div>
        </div>
    </div>

@endsection

