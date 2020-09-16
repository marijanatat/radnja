@extends('layouts.master') 


@section('content')
<div class="container">
    <div class="auth-pages mx-12 md:mx-32 mb-2 md:mb-8">
        <div class="">
                @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
                @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2 class="text-gray-700 text-lg md:text-xl font-semibold" data-aos="zoom-in">Registracija</h2>
            <div class="spacer"></div>

            <form action="{{ route('register') }}" method="POST" data-aos="zoom-in">
                @csrf
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Ime i prezime" required autofocus>

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email adresa" required autofocus>
                <input type="password" id="password" name="password"  placeholder="Lozinka" required>
                <input type="password" id="password-confirm" name="password_confirmation"  placeholder="Potvrdite lozinku" required>

                <div class="login-container">
                    <button type="submit" class="button-primary rounded-md">Registracija</button>
                    <div class="already-have-container ml-4">
                        <p class="mb-2 text-gray-700 italic lg:-ml-8"><strong>Već imate nalog?</strong></p>
                        <a href="{{ route('login') }}" class=" font-md font-semibold "><span class="text-bojasvetla">Prijavite se</span></a>
                    </div>
                </div>

                <div class="spacer"></div>

            </form>
        </div>

        <div class="auth-right hidden md:block" data-aos="fade-left">
            <img src="{{asset('./img/andrej-lisakov-Yy4sN6QzboU-unsplash.jpg')}}" alt="slika ofingeri" class="w-2/3 h-2/3  object-center my-16 mx-16" >
        </div>
    </div>
</div>
@endsection