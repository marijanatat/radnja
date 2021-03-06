@extends('layouts.master')

@section('title', 'Korpa')

@section('content')

<div class="breadcrumbs text-boja font-bold text-sm">
    <div class="breadcrumbs-container container">
        <div>
            <a href="\" class="hover:text-teal-600">Početna strana</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Korpa</span>
        </div>
    </div>
</div> <!-- end breadcrumbs -->


<div class="cart-section container ml-16">
    <div class="w-full">
        @if (session()->has('success_message'))
        <div class="alert alert-success" data-aos="fade-right">
            {{ session()->get('success_message') }}
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger" data-aos="fade-right">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (Cart::count() > 0)

        <h2 class="text-sm md:text-md -mt-2 ">{{ Cart::count() }} proizvod(a) u korpi</h2>

        <div class="cart-table">

            @foreach (Cart::content() as $item)

            <div class="cart-table-row">
                <div class="cart-table-row-left ">
                    <div class="md:flex justify-start items-center text-sm md:text-lg text-gray-700 md:space-x-3">
                        <div class="">
                            <a href="{{route('shop.show', $item->model->slug)}}"><img
                                    src="{{ productImage($item->model->image) }}" alt="item" class="cart-table-img"></a>
                        </div>
                        <div class="md:ml-4">
                            <div class="cart-item-details">
                                <div class=""><a
                                        href="{{route('shop.show', $item->model->slug)}}">{{ $item->model->name }}</a>
                                </div>

                                <div class="hidden md:block">
                                    @if ($item->options['size'] != '-')
                                    <span class="hidden md:block">Veličina: {{$item->options['size']}},</span>
                                    @endif
                                    <span class="hidden md:block">Boja: {{$item->options['color']}}</span> </div>
                                <div><span
                                        class="block md:hidden">Vel. {{$item->options['size']}}, {{$item->options['color']}}
                                    </span>
                                    </div>
                                {{-- <div><span class="hidden md:block">Boja:</span> {{$item->options['color']}}
                            </div> --}}
                            {{-- <div class="cart-table-description">{{ $item->model->details }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-table-row-right space-y-3 md:space-y-0 -mt-3 text-gray-900">
            <div class="cart-table-actions space-y-3">
                <form action="{{route('cart.destroy', $item->rowId)}}" method="POST" class="responsive-align">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="cart-options focus:outline-none hover:text-red-500 focus:text-red-600">Izbaci <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>
                <form action="{{route('cart.switchToSaveForLater', $item->rowId)}}" method="POST">
                    @csrf
                    <button type="submit" class="cart-options focus:outline-none hover:text-teal-500 focus:text-teal-500">Sačuvaj za kasnije <i class="fa fa-star-o" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="cart-options">
                Kom. <select class="quantity border border-1 border-gray-600" data-id="{{ $item->rowId }}"
                    data-productQuantity="{{$item->model->quantity}}">
                    @for($i = 1; $i < 5 + 1; $i++) <option {{ $item->qty == $i ? 'selected' : ''}}>{{ $i }}</option>
                        @endfor
                </select>
            </div>
            <div class="text-sm md:text-lg responsive-align">{{ presentPrice($item->total) }}</div>
        </div>
    </div> <!-- end cart-table-row -->

    @endforeach



</div> <!-- end cart-table -->

<div class="cart-totals px-8 py-4 " data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
    <div class="cart-totals-left">
        Za iznose narudžbine preko 3000 RSD - <span class="text-red-500 font-bold italic">BESPLATNA DOSTAVA !</span>

    </div>

    <div class="text-sm md:text-lg">
        <div>
            <span class="cart-totals-total text-sm md:text-lg">Ukupno:</span>
        </div>
        <div class="flex md:flex-col  font-semibold font-base ">
            <span class=" mr-2 text-base font-semibold  md:text-lg">{{ Cart::total() }} RSD </span>
            @if (Cart::totalFloat() < 3001) <span class=" text-base font-semibold  md:text-lg"> + dostava</span>
                @endif
        </div>
    </div>
</div> <!-- end cart-totals -->

<div class="cart-buttons">
    <a href="{{ route('shop.index') }}" class="button rounded-md font-semibold md:mt-2 shadow-md">Nastavi kupovinu</a>
    <a href="{{ route('checkout.index') }}" class="button-primary rounded-md mt-4 md:mt-2 font-semibold shadow-md">
        Završite kupovinu
    </a>
</div>

@else

<h3 class="ml-8 text-bojasvetla">Nemate proizvode u korpi!</h3>
<div class="spacer"></div>
<a href="{{ route('shop.index') }}" class="button-primary rounded-md p-2 ml-16">Nastavi kupovinu</a>
<div class="spacer"></div>
@endif


@if (Cart::instance('saveForLater')->count() > 0)

<h2 class="text-bojasvetla">{{ Cart::instance('saveForLater')->count() }} proizvod(a) sačuvanih za kasnije</h2>

<div class="saved-for-later cart-table">
    @foreach (Cart::instance('saveForLater')->content() as $item)

    <div class="cart-table-row">
        <div class="cart-table-row-left">
            <div class="md:flex justify-start items-center text-sm md:text-lg text-gray-700 md:space-x-3">
                <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ productImage($item->model->image) }}"
                        alt="item" class="cart-table-img"></a>
                <div class="cart-item-details">
                    <div class="mr-4"><a
                            href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                    {{-- <div class="cart-table-description">{{ $item->model->details }}</div> --}}
                </div>
            </div>
        </div>
        <div class="cart-table-row-right space-y-2 md:space-y-0">
            <div class="cart-table-actions space-y-2">
                <form action="{{route('saveForLater.destroy', $item->rowId)}}" method="POST" class="responsive-align">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="cart-options focus:outline-none hover:text-red-500 focus:text-red-600">Obriši <i class="fa fa-trash-o" aria-hidden="true"></i></button>

                </form>
                <form action="{{route('saveForLater.switchToCart', $item->rowId)}}" method="POST">
                    @csrf
                    <button type="submit" class="cart-options focus:outline-none hover:text-teal-500 focus:text-teal-500">Ubaci u korpu <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="responsive-align">{{ $item->model->presentPrice() }}</div>
        </div>
    </div> <!-- end cart-table-row -->
    @endforeach

</div> <!-- end saved-for-later -->

@else

<h3 class="pl-6 py-4 mt-2 italic text-bojasvetla">Nemate sačuvanih proizvoda.</h3>

@endif

</div>

</div> <!-- end cart-section -->

<div data-aos="fade-right">
    @include('partials.might-like')
</div>


@endsection

@section('extra-js')

<script>
    (function(){
            const classname = document.querySelectorAll('.quantity');

            Array.from(classname).forEach(function(element){
                element.addEventListener('change', function(){
                    const id = element.getAttribute('data-id');

                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`korpa/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function(response){
                        window.location.href = '{{ route('cart.index') }}';
                    })
                    .catch(function(error){
                        console.log(error);
                        window.location.href = '{{ route('cart.index') }}';
                    });
                });
            });
        })(); 

        
</script>
@endsection