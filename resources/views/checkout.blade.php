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

  
    <div class="checkout-section">
        <div>
            <form action="{{route('checkout.store')}}" method="POST">
                @csrf
                <h2 class="font-bold text-gray-600 text-xl">Adresa isporuke</h2>

                <div class="form-group my-1">
                    <label for="email">Email Address</label>
                    @if (auth()->user())
                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}"
                        readonly>
                    @else
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                        requried>
                    @endif
                </div>
                <div class="form-group my-1">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" requried>
                </div>
                <div class="form-group my-1">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"
                        requried>
                </div>

                <div class="half-form my-1 ">
                    <div class="form-group my-1">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}"
                            requried>
                    </div>
                    <div class="form-group my-1">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="province" name="state"
                            value="{{ old('state') }}" requried>
                    </div>
                </div> <!-- end half-form -->

                <div class="half-form my-1">
                    <div class="form-group">
                        <label for="postalcode">Postal Code</label>
                        <input type="text" class="form-control" id="postalcode" name="postalcode"
                            value="{{ old('postalcode') }}" requried>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                            requried>
                    </div>
                </div> <!-- end half-form -->

                <div class="spacer"></div>

               

                <button type="submit" class="button-primary full-width ">Naruči</button>


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
                            <div class="checkout-table-item">{{ $item->model->name }}</div>
                            <div class="checkout-table-description">{{ $item->model->details }}</div>
                            <div class="checkout-table-description">{{ $item->options['size'] }}</div>
                            <div class="checkout-table-description">{{ $item->options['color'] }}</div>
                            <div class="checkout-table-price">{{ $item->model->presentPrice() }}</div>
                        </div>
                    </div> <!-- end checkout-table -->

                    <div class="checkout-table-row-right">
                        <div class="checkout-table-quantity">{{ $item->qty }}</div>
                    </div>
                </div> <!-- end checkout-table-row -->

                @endforeach

            </div> <!-- end checkout-table -->

            <div class="checkout-totals">
                <div class="checkout-totals-left">
                    Subtotal <br>
                    {{-- Discount (10OFF - 10%) <br> --}}
                    PDV <br>
                    <span class="checkout-totals-total">Ukupno</span>

                </div>

                <div class="checkout-totals-right">
                    {{ Cart::subtotal()}} RSD<br>
                    {{-- -$750.00 <br> --}}
                    {{Cart::tax()}} RSD<br>
                    <span class="checkout-totals-total">{{ Cart::total() }} RSD</span>

                </div>
            </div> <!-- end checkout-totals -->

        </div>

    </div> <!-- end checkout-section -->
</div>

@endsection