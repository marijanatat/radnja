@extends('layouts.master')

@section('title', 'Search Result')

@section('content')

    @component('components.breadcrumbs')
        <a href="/" class="hover:text-teal-600">Početna strana</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Pretraga</span>
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


            <div class="search-results-container container">
                <h1>Search Results</h1>
                 <p class="search-results-count">{{ $products->count() }} result(s) for '{{ request()->input('query') }}'</p> 
        
                 {{-- @if ($products->total() > 0)  --}}
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Description</th>
                            <th>Price</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></th>
                                <td>{{ $product->details }}</td>
                                <td>{{ Str::limit($product->description, 80) }}</td>
                                <td>{{ $product->presentPrice() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $products->appends(request()->input())->links() }}
        
                {{-- @endif --}}
            </div> <!-- end search-results-container -->
@endsection

