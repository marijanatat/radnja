<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


<title>Mob-ing web shop | @yield('title', '')</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@500&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<livewire:styles>

@yield('extra-css')

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{asset('js/app.js')}}"></script>

<style>
  [x-cloak]{
    display: none;
  }
  
  .completed {
    text-decoration: line-through;
  }
  
  img {
    
    width: auto;
    height: 300px;
    object-fit: cover;
  }
  
  .maincontainer {
    /* position: absolute; */
    width: 450px;
    height: 520px;
    background: none;
    top: 250%;
    left: 50%;
    
    z-index: 20;
    transform: translate(-50%, -50%);
    
  }
  
  .ime:hover,
  .ime:focus {
    
    text-transform: capitalize;
    color: gold;
    
    
    
  }
  
  input:checked+svg {
    display: block;
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
  /*--------------------------------------------------------------
  # Disable aos animation delay on mobile devices
  --------------------------------------------------------------*/
  @media screen and (max-width: 768px) {
    [data-aos-delay] {
      transition-delay: 0 !important;
    }
  }
  
  @media screen and (max-width: 768px) {
    [data-aos-delay] {
      transition-delay: 0 !important;
    }
  }
  
  
  
  </style>
@yield('extra-js')

</head>

<body>
  <div id="app">
    <header>
      <div class="top-nav">
          <nav class="flex items-center justify-between flex-wrap w-full pin-t fixed z-10 top-0 mt-0 bg-boja">
              @include('partials.nav')
          </nav>
      </div>
    </header>
    <div class="bg-white">
      @yield('content')
      {{-- <livewire:shop-livewire/> --}}
    </div>
    <div class="">
      @include('partials.footers.footer')
    </div>
    @yield('extra-js')
  </div>
  @include('cookieConsent::index')
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
    
    AOS.init();
  </script> 

</body>

</html>