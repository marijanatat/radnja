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
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav  ">
                    <div class="top-nav-left">
                   
                
                            <!-- dodat nav-->
                            <nav class="flex items-center justify-between flex-wrap  p-6  w-full  pin-t fixed z-10 top-0 mt-0" >
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
                                    <li class="mr-6">
                                        <a class="inline-block px-2  lg:px-4  text-white text-md  lg:text-base no-underline hover:text-gray-200 hover:no-underline py-2 "
                                          href="#" style="color: white">Textil</a>
                                      </li>
                                      <li class="mr-6">
                                        <a class="inline-block px-2  lg:px-4  text-white text-md  lg:text-base no-underline hover:text-gray-200 hover:no-underline py-2 "
                                          href="#" style="color: white">Info</a>
                                      </li>
                                      {{-- <li class="mr-6">
                                        <a class="inline-block px-2  lg:px-4  text-white text-md  lg:text-base no-underline hover:text-gray-200 hover:no-underline py-2 "
                                          href="#" style="color: white">Contact</a>
                                      </li>
                                      <li class="mr-6">
                                        <a class="inline-block px-2  lg:px-4  text-white text-md  lg:text-base no-underline hover:text-gray-200 hover:no-underline py-2 "
                                          href="#" style="color: white">Contact</a>
                                      </li>
                                     --}}
                                    {{-- <div class=" text-white flex-grow lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0">
                                        @include('nav') 
                                    </div> --}}

                                    <div class="top-nav-right  text-white flex-grow lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0">
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
                  
                        {{-- <div class="hero-buttons">
                            <a href="http://localhost/testsite/" class="button button-white">Blog Post</a>
                            <a href="https://github.com/marijanatat/e-commerce" class="button button-white">GitHub</a>
                        </div> --}}
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
                        <div>Pronadjite nas na drustvenim mrezama</div>
                    <div class="hero-buttons">
                            <a href="http://localhost/testsite/" class="button button-white ">Facebook</a>
                            <a href="https://github.com/marijanatat/e-commerce" class="button button-white">Instagram</a>
                        </div>



                    {{-- <div class="text-center button-container"> --}}
                        <div>
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
                        <a href="{{route('shop.index')}}" class="button">View more products</a>
                    </div>
    
                </div> <!-- end container -->
    
            </div> <!-- end featured-section -->
    
            
     
          <blog-posts></blog-posts>
        
            @include('partials.footer')
            @include('footer')
        </div>
        <script src="js/app.js"></script>


    </body>
</html>
