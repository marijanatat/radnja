@extends('layouts.master') 

@section('title', 'Prijavite se')
    
@section('content')
<div class="container">
    <div class="auth-pages mx-12 md:mx-32 my-1 md:my-16 grid-cols-1 lg:grid-cols-2">
        <div class="auth-left">
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
            <h2 class="text-gray-700 text-lg md:text-xl font-semibold" data-aos="zoom-in">Prijava</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST" data-aos="zoom-in">
                @csrf

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email adresa" required autofocus>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Lozinka" required>

                <div class="login-container text-gray-700">
                    <button type="submit" class="button-primary rounded-md">Prijava</button>
                    <label class="text-bojasvetla"> 
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}  > Zapamti me
                    </label>
                </div>

                <div class="spacer"></div>

                <a href="{{ route('password.request') }}" class="italic text-bojasvetla" >
                    Zaboravili ste lozinku?
                </a>

            </form>
        </div>

       

         <div class="auth-right  -ml-20 mr-2 md:mx-12 -mt-16 md:mt-4 mb-4 md:mb-8 border-none md:border:block" style="border-left: 1px solid $separator-color;" data-aos="fade-left"> 
            <p>Ukoliko ne želite da se registrujete vašu kupovinu možete nastaviti kao gost.</p>
            <div class="spacer"></div>
            <a href="{{ route('guestCheckout.index') }}" class="auth-button-hollow text-sm font-semibold rounded-md bg-gray-400 p-3 hover:bg-bojasvetla hover:text-white" >Nastavi kao gost</a>
            <div class="spacer hidden lg:block"></div>
            &nbsp;
            <div class="spacer hidden lg:block "></div>
            <p class="mt-4 lg:mt-0">Imate opciju i da kreirate svoj nalog</p>
            <div class="spacer"></div>
            <a href="{{ route('register') }}" class="auth-button-hollow rounded-md text-sm font-semibold bg-gray-400 p-3 hover:bg-bojasvetla hover:text-white">Napravi nalog</a>
 
        </div>
    </div>
</div>
@endsection