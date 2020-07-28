<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Domaći pamuk</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="js/app.js"></script>
        <script>
          $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
        </script>
        
        <style>

.navbar.scrolled {
  background-color:rgb(20, 104, 107) !important;
  transition: background-color 200ms linear;
}

  navbar {
  overflow: hidden;
  /* background-color: #333; */
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: rgb(223, 37, 37);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
   
  
}


/* The dropdown container */
.dropdown {
 
   float: left; 
   overflow: hidden; 
  
}

  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
 width: 800px;
 height: 300px;
  /* min-width: 160px; */
  max-width: 1000px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

/* Links inside the dropdown */
.dropdown-content a {
   float: none; 
  color: rgb(8, 77, 71);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color:white;
  
 


}

/* .dropdown-content div:hover {
 display: block;
 


} */

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
.dropbtn {
  background-color: #0f284e;
  color: white;
  padding: 30px;
  font-size: 16px;
  border: none;
}
.img-wrapper {  
  
  overflow: hidden; 
}

.inner-img {
  transition: 0.3s;
}

.inner-img:hover {
  transform: scale(1.1);
}



.zig-zag {
   border: none; 
   width: 50%; 
   margin: auto; 
   margin-top: 5%;
    margin-bottom: 5%;
     height: 20px; 
     background: linear-gradient(135deg, #ECEDDC 25%, transparent 25%) -20px 0, linear-gradient(225deg, #ECEDDC 25%, transparent 25%) -20px 0, linear-gradient(315deg, #ECEDDC 25%, transparent 25%), linear-gradient(45deg, #ECEDDC 25%, transparent 25%); background-size: 40px 40px; 
     background-color: #3c434e;}

/* Other styling elements, that are not necessary for the example */

.module {
  background: white;
  border: 1px solid #ccc;
 
  > h2 {
    padding: 1rem;
    margin: 0 0 0.5rem 0;
    
  }
  > p {
    padding: 0 1rem;
  }
}

.stripe-4 {
  color: white;
  background: repeating-linear-gradient(
    -55deg,
    rgb(75, 216, 252),
    #233 10px,
    rgb(45, 190, 178) 10px,
    rgb(33, 82, 14) 20px
   
  );
}

.example_e {
border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
transition: all 0.3s ease 0s;
}

.example_e:hover {
color: #fc9700 !important;
font-weight: 700 !important;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}
.mapa:hover,
.mapa:focus {
  width: 300px;
  height: 300px;
}

.ime:hover,
.ime:focus{
  
  text-transform: capitalize;
  
  
 
}

        </style>

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav flex items-center justify-content-between ">
                    <div class="top-nav-left">
                       
                   
                            <!-- dodat nav-->
                             <nav class="navbar flex items-center bg-transparent justify-between flex-wrap  p-1  w-full  pin-t fixed z-10 top-0 mt-0 "> 
                                <div class="block lg:hidden">
                                  <button id="nav-toggle"
                                    class="flex items-center px-3 py-2  rounded text-white font-bold border border-red-900  hover:text-red-700 hover:border-white">
                                   
                                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                      <title>Menu</title>
                                      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                    </svg>
                                  </button>
                                </div>
                            
                                <div class="w-full flex-grow text-white lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0" id="nav-content">
                                  <ul class="list-reset lg:flex justify-start flex-1 items-center">
                                    <li>
                                      <a href="">
                                        <li class="hover:text-darker"><img src="{{asset('./img/baby.svg')}}"
                                                alt="kolica za bebe" style="" class="w-12 h-12 bg-transparent   p-2 rounded-md"> </li>
                                    </a>
                                      {{-- <a class="inline-block px-2  lg:px-4 py-2 text-white text-lg  lg:text-2xl hover:no-underline no-underline"
                                        href="/">Home</a> --}}
                                    </li>
                                    <li class="mr-3">
                            
                                      <a class="inline-block px-2  lg:px-4 py-2 text-white text-md  lg:text-base hover:no-underline no-underline"
                                        href="#" style="color: white">Bebe</a>
                                      
                                    </li>
                                     <li class="">
                                      <a class="inline-block  text-md  lg:text-base no-underline hover:text-gray-200 hover:no-underline  py-2 "
                                        href="#" style="color: white">Žene</a>
                                      
                                    </li>
                                    <li class="mr-6">
                                      <a class="inline-block px-2  lg:px-4  text-white text-md  lg:text-base no-underline hover:text-gray-200 hover:no-underline py-2 "
                                        href="#" style="color: white">Muškarci</a>
                                      
                                    </li>
                                    <li class="dropdown mr-6">
                                        <button class="dropbtn inline-block px-2  lg:px-4 bg-transparent uppercase text-white  text-md  lg:text-base no-underline hover:text-gray-200 hover:no-underline py-2 "
                                          href="#" >Textil</button>
                                        
                                            <div class="dropdown-content  ">
                                           
                                              
                                                <div class="flex">
                                                  <div class="div  w-1/2">
                                                    <div class="w-full">
                                                      <a href="#" style="color:gray">Link 1</a>
                                                    </div>
                                                    <a href="#" style="color:gray">Link 2</a>
                                                    <a href="#" style="color:gray">Link 3</a>
                                                  </div>
                                              
                                                 <div class="div w-1/2">
                                                
                                                    <a href="#" style="color:gray">Link 1</a>
                                                    <a href="#" style="color:gray">Link 2</a>
                                                    <a href="#" style="color:gray">Link 3</a>
                                               </div>
                                                </div>
                                             
                                            </div>
                                           
                                            
                                            
                                            
                                         
                                      </li>
                                       <li class="mr-6">
                                        <a class="inline-block px-2  lg:px-4  text-white text-md  lg:text-base no-underline hover:text-gray-500 hover:no-underline py-2 "
                                          href="#" style="color: white;">Info</a>
                                      </li> 


                                     <div >
                                       
                                          @include('partials.menus.main-right') 
                                      
                                     </div>
                                   
                                  
                                  </ul>
                                </div>
                                
                              </div> <!-- end top-nav -->
                              </nav>
                             
                            <!-- kraj-->
                          
                   
           
                           {{-- {{menu('main','partials.menus.main')}} --}}
                      </div>
    
                   {{-- <div class="top-nav-right">
                      @include('partials.menus.main-right') 
                    </div>
                </div> <!-- end top-nav --> --}}
             

                <div class="hero container">
                    <div class="hero-copy">
                        <h1>Shop</h1>
                        <p style="font-size:30px ">Ukoliko želite najbolje i najkvalitetnije za svoje dete kupujte kod nas.</p>
                  
                        <div class="mb-4 font-xl ml-2">Pronadjite nas na društvenim mrežama </div> 
                     <div class="hero-buttons">
                            <a href="http://localhost/testsite/" class="button button-white " style="background-color:rgb(252, 141, 38); ">Facebook</a>
                            <a href="https://github.com/marijanatat/e-commerce" class="button button-white" style="background-color:rgb(30, 190, 129)">Instagram</a>
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
    
                    <p class="section-description text-center " style="font-size:30px ">Naši proizvodi su isključivo domaće proizvodnje od najkvalitetnijeg 100% pamuka</p>
                        


                    {{-- <div class="text-center button-container"> --}}
                        <div class="">
                            @include('kategorije')
                        </div>
                        {{-- <a href="#" class="button">Featured</a>
                        <a href="#" class="button">On Sale</a> --}}
                    {{-- </div> --}}
    
                    {{-- <div class="tabs">
                        <div class="tab">
                            Featured
                        </div>
                        <div class="tab">
                            On Sale
                        </div>
                    </div> --}}
    
                    <div class="products text-center">
                        @foreach ($products as $product)
                        <div class="product">
                            <a href="{{route('shop.show',$product->slug)}}"><img src="{{productImage($product->image)}}" style="height:140px;" alt="product"></a>
                            <a href="{{route('shop.show',$product->slug)}}"><div class="product-name">{{$product->name}}</div></a>
                            <div class="product-price">{{$product->presentPrice()}}</div>
                        </div>
                        @endforeach
                       
                        
                    </div> <!-- end products -->
    
                    <div class="text-center button-container">
                        <a href="{{route('shop.index')}}" class="example_e button hover:bg-green-900">View more products</a>
                    </div>
    
                </div> <!-- end container -->
    
            </div> <!-- end featured-section -->
            <div class="bg-color-white rounded-md border-gray-400  border-transparent opacity-25">
              <hr class="zig-zag">
               
              <hr>
            </div>

            <div class="module">
              <h2 class="stripe-4 text-transparent">O</h2>

            </div>
    
            
{{--      
          <blog-posts></blog-posts> --}}
{{--         
            @include('partials.footer') --}}
            <div class="w-full ">
              @include('footer')
            </div>
        </div>

        <script>
          // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
          window.onscroll = function() {scrollFunction()};
          
          function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
              document.getElementById("navbar").style.padding = "30px 10px";
              document.getElementById("logo").style.fontSize = "25px";
            } else {
              document.getElementById("navbar").style.padding = "80px 10px";
              document.getElementById("logo").style.fontSize = "35px";
            }
          }
          </script>
          
     

    </body>
</html>
