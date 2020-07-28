<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Todo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  

 
    <!--<script src="/js/app.js" defer> </script>-->
    
   
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <style>
        .completed{
            text-decoration: line-through;
        }
        img {
    
    width:  auto;
    height: 300px;
    object-fit: cover;
}

.maincontainer{
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
.ime:focus{
  
  text-transform: capitalize;
  color:gold;
  
  
 
}

    </style>

</head>
<body>
    <div id="app">
        
      

        <div>
            @yield('footer')
        </div>  

    </div>

   
</body>
</html>
