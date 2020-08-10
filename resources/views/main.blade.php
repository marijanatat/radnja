<!doctype html>
<html lang="{{ app()->getLocale() }}">

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

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");    
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
  </script>
  <style>
    .kupovina{
    
  animation-duration: 4s;
  animation-name: slidein;
  animation-iteration-count: infinite;
  text-shadow: 2px 2px rgb(20, 104, 107);
}
  @keyframes slidein {
  from {
    margin-left: 100%;
    width: 100%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }

    }
  

  
 /* .grow:hover
{
        -webkit-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
} */
  </style>
</head>

<body>
  <div id="app">
    <header class="with-background" >
      <div class="top-nav flex items-center">
        <div class="top-nav-left">
          <nav class="navbar flex items-center bg-transparent justify-between flex-wrap w-full pin-t fixed z-10 top-0 mt-0 ">
            @include('nav')
        </nav>




          {{-- {{menu('main','partials.menus.main')}} --}}
        </div>

        {{-- <div class="top-nav-right">
                      @include('partials.menus.main-right') 
                    </div>
                </div> <!-- end top-nav --> --}}


        <div class="hero container ">
          <div class="hero-copy ">
            
             <div id="rotate-words">
              <h2 class="animate-pulse italic text-4xl  font-bold text-gray-500 tracking-widest">Za porodicu <span>sa stilom.</span></h2> 
              <br>
              <p  class=" italic text-3xl font-mono  font-bold tracking-wide pl-8" style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Proverite naš kvalitet !</p>
            </div> 

              <div class=" md:block w3-animate-fading mb-6 text-2xl text-white lg:text-gray-800 font-semibold font-mono ml-4 italic">
                Pratite nas na društvenim mrežama.
                </div>
              <div class="hero-buttons text-gray-800 items-center flex ml-16 md:ml-40 ">
                <div id="social">
                  <a href=""><i class="fa fa-facebook-official" aria-hidden="true" 
                    ></i></a>
                </div>
                <div id="social1">
                  <a href="" X><i class="fa fa-instagram w-24" aria-hidden="true"></i></a>
                </div>

                {{-- <a href="http://localhost/testsite/" class="button button-white " style="background-color:rgb(250, 125, 9); ">Facebook</a>
                              <a href="https://github.com/marijanatat/e-commerce" class="button button-white" style="background-color:rgb(20, 104, 107) !important">Instagram</a> --}}
              </div>

          </div> <!-- end hero-copy -->

          <div class="hero-image">
            {{-- <img src="img/deca.jpg" alt="deca"> --}}

            {{-- <img src="img/deca.jpg" alt="deca"> --}}
          </div> <!-- end hero-image -->
        </div> <!-- end hero -->
    </header>

    <div class="featured-section" style="background-color: white">

      <div class="container">
        <h1 class="text-center">Shop</h1>

        <p class="section-description text-center " style="font-size:30px ">Naši proizvodi su isključivo domaće
          proizvodnje od najkvalitetnijeg 100% pamuka</p>

        <div class="mx-2">
          @include('kategorije')
        </div>

        <div class="bg-color-white rounded-md border-gray-400  border-transparent opacity-25">
          <hr class="zig-zag">
          <hr>
        </div>

        @include('carousel')
      </div>  
        <div class="module">
          <br>
      
        
        {{-- <div class="bg-color-white rounded-md border-gray-400  border-transparent opacity-25">
          <hr class="zig-zag">
          <hr>
        </div> --}}
        
        <!-- div-->
        {{-- <div class="w-full h-full  bg-opacity-25 shadow-md mb-8 p-24 text-center "> --}}
           <div class="kupovina mt-20 mb-20">
            <h1 class="text-3xl font-bold text-gray-700 p-4 max-h-12" >
              Ovo je samo deo našeg asortimana
            </h1>
            <br>
          </div> 
          {{-- <hr class="max-h-64 bg-gray-800 h-2 border-dashed " >
          <div>
            <h2 class="text-white font-5xl uppercase p-4 font-bold mt-16 transition ease-in duration-700" style="text-shadow: 2px 2px rgb(112, 112, 112);"> Ovo je samo deo našeg asortimana</h2>
          </div> --}}
          
        {{-- </div> --}}
        
        <!-- end div-->
        {{-- <div class="bg-color-white rounded-md border-gray-400  border-transparent opacity-25">
          <hr class="zig-zag">
          <hr>
        </div>
        --}}
        
        <div class="products text-center mx-2 grid grid-cols-2 md:grid-cols-4 mt-2 " style="">
          @foreach ($products as $product)
          <div class="product">
            <a href="{{route('shop.show',$product->slug)}}"><img class="mx-auto" src="{{productImage($product->image)}}"
              style="height:140px;" alt="product"></a>
              <a href="{{route('shop.show',$product->slug)}}">
                <div class="product-name">{{$product->name}}</div>
              </a>
              <div class="product-price">{{$product->presentPrice()}}</div>
            </div>
            @endforeach
            
            
          </div> <!-- end products -->
          
          <div class="text-center button-container text-sm xl:text-lg mt-2 md:mt-16 mb-2 p-1 md:mb-4 md:p-4">
            <a href="{{route('shop.index')}}" class="example_e button hover:bg-rgb(20, 104, 107)" >View more products</a>
          </div>
          
        </div> 

    </div> <!-- end featured-section -->
    
    {{-- <div class="module">
    
      @include('partials.subscribe')
    </div>   --}}

    {{--      
          <blog-posts></blog-posts> --}}
    {{--         
            @include('partials.footer') --}}
    <div class="w-full shadow-md my-1">
      @include('footer')
    </div>
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

    

    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
          // window.onscroll = function() {scrollFunction()};
          
          // function scrollFunction() {
          //   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          //     document.getElementById("navbar").style.padding = "30px 10px";
          //     document.getElementById("logo").style.fontSize = "25px";
          //   } else {
          //     document.getElementById("navbar").style.padding = "80px 10px";
          //     document.getElementById("logo").style.fontSize = "35px";
          //   }
          // }
  </script>



</body>

</html>