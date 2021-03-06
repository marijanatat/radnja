<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="dc.title" content="Prodavnica odeće za decu i odrasle | Butik Mob-ing Odžaci">
  <meta property="og:title" content="Prodavnica odeće za decu i odrasle | Butik Mob-ing Odžaci">

  <title>Prodavnica odeće za decu i odrasle | Butik Mob-ing Odžaci</title>

  <meta name="description" content="Butik i online prodavnica sa odećom domaćih proizvođača. Kvalitetan pamuk i povoljne cene. Najbolje za Vašu porodicu. Naručite iz udobnosti Vašeg doma.">
  <meta name="keywords" content="butik odžaci, butik odzaci‚ dečija garderoba, odeća, odeća za decu, oprema za bebe, kids&family, kids, family, decija garderoba, bebi garderoba, pokloni za bebe, odeća, prodaja odeće za decu, oprema za bebe, online prodaja, webshop, odeća za muškarce, odeća za žene, majice, haljine, benkice, zeke, laravel webshop, 
  bodići, helanke, suknje, pantalone, farmerke, peškiri, posteljina, donji veš, gaće, čarape, maske, duksevi, kompleti, trenerke, jakne, mobing odžaci">
  <meta property="og:description" content="Butik i online prodavnica sa odećom domaćih proizvođača. Kvalitetan pamuk i povoljne cene. Najbolje za Vašu porodicu.Naručite iz udobnosti Vašeg doma.">
  <meta property="og:url" content="https://mob-ing.rs">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="BUTIK MOB-ING WEB SHOP">


  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mali:wght@500&display=swap">

  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script> 

  <style>
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
  </style>
</head>

<body class="">
  <div id="preloader"></div>
  <div id="app">
    <header class="with-background">
      <div class="top-nav">
        <nav class="flex items-center bg-boja justify-between flex-wrap w-full pin-t fixed z-10 mt-0" id="navbar">
          @include('partials.nav')
        </nav>
      </div>

      <div class="container">
        <div class="pt-12 md:pt-0 md:-mt-16">

          <div id="rotate-words" class="">
            <h2 class="animate-pulse italic text-4xl text-center md:text-left font-bold text-gray-900 tracking-widest mb-4 -mt-6">Za porodicu <span
                class="text-gray-700 text-4xl" style="font-family: 'Gochi Hand'">sa stilom.</span></h2>
            <br>
          </div>
            <div class="space-y-8 md:space-y-20 md:-mt-44 md:pt-6 -mt-8">
              <div class="md:ml-32 md:pl-6 italic uppercase text-4xl text-white font-bold text-center md:text-left tracking-wide"
                style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                Proverite naš <br> kvalitet!</div>
  
            <div
              class="text-center md:text-left md:ml-20 w3-animate-fading mb-6 md:pb-6 pb-4 text-2xl text-white lg:text-boja z-10 font-semibold font-mono italic -mt-10">
              Pratite nas na društvenim mrežama:
            </div>
            </div>
          <div class="hero-buttons text-gray-800 items-center flex justify-center md:justify-start md:ml-44">
            <div id="social">
              <a href="https://www.facebook.com/Butik-KidsFamily-105437284628084" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            </div>
            <div id="social1">
              <a href="https://www.instagram.com/butik_kids_and_family/" target="_blank"><i class="fa fa-instagram w-24" aria-hidden="true"></i></a>
            </div>

          </div>

        </div> <!-- end hero-copy -->

      </div> <!-- end hero -->
    </header>

    <div class="featured-section" style="background-color: white">

      <div class="container">


        <p class="section-description text-center " style="font-size:30px ">Naši proizvodi su isključivo domaće
          proizvodnje od najkvalitetnijeg pamuka</p>

        <div class="mx-2">
          @include('partials.kategorije')
        </div>

        <div class="bg-color-white rounded-md border-gray-400  border-transparent opacity-25">
          <hr class="zig-zag">
          <hr>
        </div>

        @include('partials.carousel')
      </div>
      <div class="module">
        <br>
        <div class="kupovina mt-20 mb-20 text-center">
          <h1 class="text-3xl font-bold text-gray-600 p-4 max-h-12" style="font-family: 'Mali', cursive;"
              data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            Ovo je samo deo našeg asortimana !!!
          </h1>
          <br>
        </div>
      </div>

      <div class="products container mx-auto text-center grid grid-cols-2 md:grid-cols-4 mt-2" data-aos="fade-up"
        data-aos-duration="3000">
        @foreach ($products as $product)
        <div class="product pt-8 pb-6">
          <a href="{{route('shop.show',$product->slug)}}"><img class="mx-auto" src="{{productImage($product->image)}}"
              style="height:200px; width:200px;" alt="product"></a>
          <a href="{{route('shop.show',$product->slug)}}">
            <div class="mt-2">{{$product->name}}</div>
          </a>
          <div class="">{{$product->presentPrice()}}</div>
        </div>
        @endforeach


      </div> <!-- end products -->

      <div class="text-center button-container text-sm xl:text-lg mt-2 md:mt-16 mb-2 p-1 md:mb-4 md:p-4">
        <a data-turbolinks="false" href="{{route('shop.index')}}" class="example_e bg-boja hover:bg-rgb(20, 104, 107) "
          style="font-family: 'Gochi Hand'" data-aos="fade-up" data-aos-duration="2000">Pogledajte sve proizvode</a>
      </div>


    </div> <!-- end featured-section -->

    <a href="#" class= "back-to-top" title="Povratak na vrh strane"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

    <div>
      @include('partials.footers.footer')
    </div>

    @include('cookieConsent::index')
  </div>

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
     // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return true;
  });

  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });  
  
    AOS.init();
  </script>
</body>

</html>