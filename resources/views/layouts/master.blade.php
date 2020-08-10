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

<livewire:styles>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="{{asset('js/app.js')}}"></script>
@livewireStyles

<style>
  input:checked + svg {
  	display: block;
  }
  [x-cloak]{
    display: none;
  }

  #proizvodi{
    animation-duration: 1.5s;
  animation-name: slidein  ;
  
  }
  @keyframes slidein {
      /* 0%{
      transform: scaleY(1);
    }
    100%{
      transform: scaleY(0)
    }   */
    from {
    margin-top: 200%;
    width: 100%; 
  } 

  to {
    margin-top: 0%;
    width: 100%;
  }  

    }

    

</style>

</head>

<body>
  <div id="app">
    <header>
      <div class="top-nav flex items-center">
        <div class="top-nav-left">
          <nav class="flex items-center justify-between flex-wrap w-full pin-t fixed z-10 top-0 mt-0 bg-boja">
              @include('nav')
          </nav>
        </div>
      </div>
    </header>
    <div class="bg-white">
      @yield('content')
      {{-- <livewire:shop-livewire/> --}}
    </div>
    <div class="">
      @include('footer')
    </div>
    @yield('extra-js')
  </div>
  
    <livewire:scripts>
    <script>
      document.getElementById('nav-toggle').onclick = function(){
        document.getElementById('nav-content').classList.toggle('hidden');
      }

      var specifiedElement = document.getElementById('nav-toggle');
      var specifiedElement1 = document.getElementById('nav-content');
      //I'm using "click" but it works with any event
      document.addEventListener('click', function(event) {
      var isClickInside = specifiedElement.contains(event.target);
      var isClickInside1 = specifiedElement1.contains(event.target);
      if (!isClickInside && !isClickInside1) {
        document.getElementById('nav-content').classList.add('hidden');
      }
    });
  </script> 

@livewireScripts
</body>

</html>