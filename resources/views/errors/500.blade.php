@extends('layouts.master')

@section('title', "Greška na serveru")

@section('content')

<div class="thank-you-section h-screen ml-6 md:ml-0 -mb-32">
    <h1 class="text-4xl font-semibold -mt-40 text-gray-800" data-aos="flip-left">Uuups!</h1>
    <p class="text-xl">Došlo je do greške na serveru!</p>    
    <div class="spacer"></div>
    <div class="flex flex-col md:flex-row md:space-x-3 space-y-4 md:space-y-0">
        <a href="{{ url('/') }}" class="button rounded-md text-boja font-semibold">Početna strana</a>
        <a href="{{ url('/proizvodi') }}" class="button rounded-md text-boja font-semibold">Pogledaj sve proizvode</a>
    </div>
</div>

@endsection