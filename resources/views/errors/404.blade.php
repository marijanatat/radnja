@extends('layouts.master')

@section('title', "Stranica nije pronađena")

@section('content')

    <div class="thank-you-section h-screen ml-6 md:ml-0 -mb-32">
        <h1 class="text-4xl font-semibold -mt-40 text-gray-800" data-aos="flip-left">Uuups!</h1>
        <p class="text-xl">Stranica nije pronađena!</p>
        <img class="w-64 h-auto md:w-auto  my-6 rounded-md" src="{{asset('./img/404.jpg')}}" alt="slika dete">
        <div class="spacer"></div>
        <div class="flex flex-col md:flex-row md:space-x-3 space-y-4 md:space-y-0">
            <a href="{{ url('/') }}" class="button rounded-md text-boja font-semibold">Početna strana</a>
            <a href="{{ url('/proizvodi') }}" class="button rounded-md text-boja font-semibold">Pogledaj sve proizvode</a>
        </div>
    </div>

@endsection