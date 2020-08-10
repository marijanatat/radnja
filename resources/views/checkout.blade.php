{{-- @extends('layouts.master')



@section('extra-css')

@endsection

@section('content')

<div class="container">

    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif

  
    <div class="checkout-section">
        <div class="mx-4 my-4 md:ml-1 -mt-4 md:mt-4">
            <form action="{{route('checkout.store')}}" method="POST">
                @csrf
                <h2 class="font-bold text-gray-600 text-xl -mt-4">Adresa isporuke</h2>

                <div class="form-group  p-1 ">
                    <label for="email" class="text-sm md:text-base">Email Address</label>
                    @if (auth()->user())
                    <input type="email" class="form-control"  id="email" name="email" value="{{ auth()->user()->email }}"
                        readonly>
                    @else
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        requried>
                    @endif
                </div>
                <div class="form-group  p-1 -mt-8">
                    <label for="name" class="text-sm md:text-base">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" requried>
                </div>
                <div class="form-group p-1 -mt-8">
                    <label for="address" class="text-sm md:text-base">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"
                        requried>
                </div>

                <div class="half-form p-1 -mt-8 ">
                    <div class="form-group ">
                        <label for="city" class="text-sm md:text-base">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}"
                            requried>
                    </div>
                    <div class="form-group">
                        <label for="state" class="text-sm md:text-base">State</label>
                        <input type="text" class="form-control" id="province" name="state"
                            value="{{ old('state') }}" requried>
                    </div>
                </div> <!-- end half-form -->

                     <div class="form-group -mt-8">
                        <label for="postalcode" class="text-sm md:text-base">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode"
                            value="{{ old('postalcode') }}" requried>
                    </div>
                    <div class="form-group -mt-8">
                        <label for="phone" class="text-sm md:text-base">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                            requried>
                    </div>
                </div> <!-- end half-form -->

                <div class="spacer"></div>

               

                <button type="submit" class="button-primary full-width rou ">Naruči</button>


            </form>
        </div>



        <div class="checkout-table-container">
            <h2 class="font-bold text-gray-600 text-xl">Vaša narudžbenica</h2>

            <div class="checkout-table">
                @foreach (Cart::content() as $item)

                <div class="checkout-table-row">
                    <div class="checkout-table-row-left">
                        <img src="{{ productImage($item->model->image) }}" alt="item" class="checkout-table-img">
                        <div class="checkout-item-details">
                            <div class="checkout-table-item text-base text-gray-600 ">{{ $item->model->name }}</div>
                            {{-- <div class="checkout-table-description">{{ $item->model->details }}</div> --}}
                            {{-- <div class="checkout-table-description text-base text-gray-600 ">{{ $item->options['size'] }}, {{ $item->options['color'] }}</div> --}}
                            {{-- <div class="checkout-table-description">{{ $item->options['color'] }}</div> --}}
                            {{-- <div class="checkout-table-price text-base text-gray-600">{{ $item->model->presentPrice() }}</div>
                        </div>
                    </div> <!-- end checkout-table -->

                    <div class="checkout-table-row-right text-base text-gray-600">
                        <div class="checkout-table-quantity">{{ $item->qty }}</div>
                    </div>
                </div> <!-- end checkout-table-row -->

                @endforeach --}}

            {{-- </div> <!-- end checkout-table --> --}}
{{-- 
            <div class="checkout-totals">
                <div class="checkout-totals-left"> --}}
                    {{-- Subtotal <br>
                    {{-- Discount (10OFF - 10%) <br> --}}
                    {{-- PDV <br>  --}}
                    {{-- <span class="checkout-totals-total">Ukupno</span>

                </div>

                <div class="checkout-totals-right"> --}}
                    {{-- {{ Cart::subtotal()}} RSD<br>
                    {{-- -$750.00 <br> --}}
                   
                    {{-- <span class="checkout-totals-total">{{ Cart::total() }} RSD</span>

                </div>
            </div> <!-- end checkout-totals -->

        </div>

    </div> <!-- end checkout-section -->
</div>

@endsection  --}}


@extends('layouts.master')



@section('extra-css')

@endsection

@section('content')

<div class="container">

    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
    @endif

    @if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif

  
    <div class=" ">
        <div class="checkout-section grid-cols-1 md:grid-cols-2">
            <div class="mx-4 my-4 md:ml-1 -mt-4 md:mt-4">
                <form action="{{route('checkout.store')}}" method="POST">
                    @csrf
                    <h2 class="font-bold text-gray-600 text-xl -mt-4">Adresa isporuke</h2>
    
                    <div class="form-group ">
                        <label for="email" class="text-sm md:text-base">Email Address</label>
                        @if (auth()->user())
                        <input type="email" class="" id="email" name="email" value="{{ auth()->user()->email }}"
                            readonly>
                        @else
                        <input type="email" class="" id="email" name="email" value="{{ old('email') }}"
                            requried>
                        @endif
                    </div>
                    <div class="form-group p-1 -mt-4">
                        <label for="name" class="text-sm md:text-base">Name</label>
                        <input class="" type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" requried>
                    </div>
                    <div class="form-group  p-1 -mt-4">
                        <label for="address">Address</label>
                        <input type="text" class="" id="address" name="address" value="{{ old('address') }}"
                            requried>
                    </div>
    
                    <div class="half-form p-1 -mt-4 ">
                        <div class="form-group ">
                            <label for="city" class="text-sm md:text-base">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}"
                                requried>
                        </div>
                        <div class="form-group ">
                            <label for="state" class="text-sm md:text-base">State</label>
                            <input type="text" class="form-control" id="province" name="state"
                                value="{{ old('state') }}" requried>
                        </div>
                    </div> <!-- end half-form -->
    
                    <div class="half-form p-1 -mt-8">
                        <div class="form-group">
                            <label for="postalcode" class="text-sm md:text-base">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode"
                                value="{{ old('postalcode') }}" requried>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-sm md:text-base">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                                requried>
                        </div>
                    </div> <!-- end half-form -->
    
                
    
                    <button type="submit" class="button-primary full-width  -mt-2">Naruči</button>
    
    
                </form>
            </div>
    
    
    
            <div class="">
                <div class="checkout-table-container">
                    <h2 class="font-bold text-gray-600 text-xl mx-4">Vaša narudžbenica</h2>
        
                    <div class="checkout-table">
                        @foreach (Cart::content() as $item)
        
                        <div class="checkout-table-row">
                            <div class="checkout-table-row-left space-x-4">
                                <img src="{{ productImage($item->model->image) }}" alt="item" class="checkout-table-img">
                                <div class="checkout-item-details">
                                    <div class="checkout-table-item text-base text-gray-600">{{ $item->model->name }}</div>
                                   
                                    <div class="checkout-table-description text-base text-gray-600">{{ $item->options['size'] }},{{ $item->options['color'] }}</div>
                                   
                                    <div class="checkout-table-price text-base text-gray-600">{{ $item->model->presentPrice() }}</div>
                                </div>
                            </div> <!-- end checkout-table -->
        
                            <div class="checkout-table-row-right">
                                <div class="checkout-table-quantity">{{ $item->qty }}</div>
                            </div>
                        </div> <!-- end checkout-table-row -->
        
                        @endforeach
        
                    </div> <!-- end checkout-table -->
         
                    <div class="checkout-totals mx-4">
                        <div class="checkout-totals-left">
                          
                            <span class="checkout-totals-total">Ukupno</span>
        
                        </div>
        
                        <div class="checkout-totals-right">
                         
                            <span class="checkout-totals-total">{{ Cart::total() }} RSD</span>
        
                        </div>
                    </div> <!-- end checkout-totals -->
        
                </div>
            </div>
    
        </div> <!-- end checkout-section -->
    </div>
    </div>

@endsection