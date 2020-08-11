@extends('layouts.master')

@section('title', 'Thank You')

@section('extra-css')

@endsection

{{-- @section('body-class', 'sticky-footer') --}}

@section('content')

   <div class="thank-you-section h-screen">
       <h1 class="text-lg font-semibold -mt-20 text-gray-800" data-aos="flip-left">Hvala Vam za <br>Vašu porudžbinu!</h1>
       <p>Dobićete mail o rezervaciji.</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button rounded-md text-boja font-semibold">Home Page</a>
       </div>
   </div>




@endsection
