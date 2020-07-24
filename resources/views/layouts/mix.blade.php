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

/* THE CARD HOLDS THE FRONT AND BACK FACES */
.thecard{
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  transform-style: preserve-3d;
  transition: all 0.8s ease;
}

/* THE PSUEDO CLASS CONTROLS THE FLIP ON MOUSEOVER AND MOUSEOUT */
.thecard:hover{
  transform: rotateY(180deg);
}

/* THE FRONT FACE OF THE CARD, WHICH SHOWS BY DEFAULT */
 .thefront{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  backface-visibility: hidden;
  overflow: hidden;
  background: #ffc728;
  color: #000;
}

/* THE BACK FACE OF THE CARD, WHICH SHOWS ON MOUSEOVER */
.theback{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  backface-visibility: hidden;
  overflow: hidden;
  background: #fafafa;
  color: #333;
  text-align: center;
  transform: rotateY(180deg);
}


/*This block (starts here) is merely styling for the flip card, and is NOT an essential part of the flip code */
.thefront h1, .theback h1{
  font-family: 'zilla slab', sans-serif;
  padding: 30px;
  font-weight: bold;
  font-size: 24px;
  text-align: center;
}

.thefront p, .theback p{
  font-family: 'zilla slab', sans-serif;
  padding: 30px;
  font-weight: normal;
  font-size: 12px;
  text-align: center;
}

.slantedDivA{
    position:relative;
    width: 100%;
    height: 200px;
     background:gray;
     opacity: 0.5;
     z-index: -1;
    
     
} 
.slantedDivA:hover {
  filter: brightness(85%);
}

.slantedDivA::after{
    position: absolute; ;
    width: 100%;
    height: 100%;
     content:'';
     background: #11e1d9;
     /* background: #c8ddf2; */
     top: 0;
     right: 0;
     left: 0;
     bottom: 0;
     transform-origin:top left ;
      transform:skewY(4deg); 
    

    
     
} 
body {
  /* background-image: url('../img/andrej-lisakov-Yy4sN6QzboU-unsplash-1.jpg'); */
  background:#c1c8c7;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
 #F{
   
    position: relative;
    width: 100%;
    height: 300px;
     /* background:#11e1d9; */
     background: #4ccac4;
    
       /* z-index: -1;  
      */
} 
#F::after{
    position: absolute; ;
    width: 100%;
    height: 100%;
     content:'';
      background:gray; 
     /* background: #11e1d9;   */
     top: 0;
     right: 0;
     left: 0;
     bottom: 0;
     transform-origin:bottom left ;
      transform:skewY(-3deg); 
      z-index: -1;
       
     
} 

    </style>

</head>
<body >
    <div id="app" >
        
       <div class="slantedDivA">
          <h2 class=" w-full text-black-800 text-4xl px-5 font-bold leading-none tracking-widest p-4">Kako poručiti?</h2>
       </div>

    </div>
    <div>
        @yield('isporuka')
     </div>
    <div>
      @yield('otkazivanje')
    </div>
    <div>
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
    <div >
        @include('footer1')
    </div>
    


</html>
