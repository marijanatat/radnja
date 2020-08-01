<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Mob-ing web shop</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@yield('extra-css')

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="{{asset('js/app.js')}}"></script>

</head>

<body>
  <div id="app">
    <header>
      <div class="top-nav flex items-center">
        <div class="top-nav-left">
          <nav style="background-color: rgb(20, 104, 107)"
                class="flex items-center justify-between flex-wrap p-1 w-full pin-t fixed z-10 top-0 mt-0">
              @include('nav')
          </nav>
        </div>
      </div>
    </header>
    <div class="bg-white">
      @yield('content')
    </div>
    <div class="">
      @include('footer')
    </div>
    @yield('extra-js')
  </div>

  {{-- <div>
        @yield('placanje')
     </div>
     <div>
      @yield('porucivanje')
     </div>
     <div>
      @yield('privatnost')
     </div>
     <div>
      @yield('reklamacije')
     </div>
    

    {{-- <div>
        @include('neki')
    </div> --}}
  {{-- <div >
        @include('footer1')
    </div> --}}
    <script>
      document.getElementById('nav-toggle').onclick = function(){
        document.getElementById('nav-content').classList.toggle('hidden');
      }
  </script> 
</body>

</html>