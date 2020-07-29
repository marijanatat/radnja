@extends('layouts.app')



@section('content')
<div class="container">
    <div class="auth-pages">
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
            <h2 class="text-gray-700 text-lg">Prijava</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Prijava</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamti me
                    </label>
                </div>

                <div class="spacer"></div>

                <a href="{{ route('password.request') }}">
                    Zaboravili ste Password?
                </a>

            </form>
        </div>

        <div class="auth-right ">
            {{-- <h2>New Customer</h2>
            <div class="spacer"></div>
            <p><strong>Save time now.</strong></p> --}}
            <p>Ukoliko ne želite da se registrujete vašu kupovinu možete nastaviti kao gost.</p>
            <div class="spacer"></div>
            <a href="{{ route('guestCheckout.index') }}" class="auth-button-hollow rounded-md bg-orange-500 p-2" >Nastavi kao gost</a>
            <div class="spacer"></div>
            &nbsp;
            <div class="spacer"></div>
            {{-- <p><strong>Save time later.</strong></p> --}}
            <p>Imate opciju i da kreirate svoj nalog</p>
            <div class="spacer"></div>
            <a href="{{ route('register') }}" class="auth-button-hollow rounded-md bg-orange-500 p-2">Napravi nalog</a>

        </div>
    </div>
</div>
@endsection