<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
  /* padding: 14px 16px; */
  text-decoration: none;
   
  
}


/* The dropdown container */
.dropdown {
  
    /* float: left; */
   overflow: hidden; 
  
}

  .dropdown-content {
    padding-left: 10px;
    padding-right: 10px;
  display: none;
  position: absolute;
  left: 0;
  right: 0;
  background-color: #f9f9f9;
  color:rgb(20, 104, 107) !important;
 max-width: 2000px;
 height: 300px;
 width: 100%;
  /* min-width: 160px; */
   /* max-width: 1000px;  */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

/* Links inside the dropdown */
.dropdown-content a {
   float: none; 
  color: rgb(6, 245, 245);
 
  padding-left: 8px;
  padding-right: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  width: 100%;
  font-size: 12px;
  
}
.dropdown-content span {
   float: none; 
  color:  #0a361b;
  font-style: bold;
  padding-top: 16px;
  padding-left: 8px;
  padding-right: 16px;
  padding-bottom: 8px;
  text-decoration: none;
  display: block;
  text-align: left;
  width: 100%;
  font-size: 14px;
  
  
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color:#f2f7e8;
  /* background-color: #0f284e; */
  /* color:#fc9700; */
  
  
}


/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
 
}
.dropbtn {
  background-color: #0a361b;
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



/* .slantedDivA{
    position:relative;
    width: 100%;
    height: 200px;
     background:gray;
     opacity: 0.5;
     z-index: -1;
    
     
}  */
/* .slantedDivA:hover {
  filter: brightness(85%);
} */

/* .slantedDivA::after{
    position: absolute; ;
    width: 100%;
    height: 100%;
     content:'';
     background: #11e1d9;
  
     top: 0;
     right: 0;
     left: 0;
     bottom: 0;
     transform-origin:top left ;
      transform:skewY(4deg); 
    
     
}  */

body {
  /* background-image: url('../img/andrej-lisakov-Yy4sN6QzboU-unsplash-1.jpg'); */
   background:rgb(20, 104, 107) !important;
  background-repeat: no-repeat;
  background-attachment: fixed;
  /* background-size: cover; */
  
}
 /* #F{
   
    position: relative;
    width: 100%;
    height: 300px;
     /* background:#11e1d9; */
     /* background: #4ccac4; */
    
       /* z-index: -1;  
      */
/* } 
#F::after{
    position: absolute; ;
    width: 100%;
    height: 100%;
     content:'';
      background:gray; 
     /* background: #11e1d9;   */
     /* top: 0;
     right: 0;
     left: 0;
     bottom: 0;
     transform-origin:bottom left ;
      transform:skewY(-3deg); 
      z-index: -1;
       
     
}   */


/* The dropdown container */
.dropdown {
  
    /* float: left; */
   overflow: hidden; 
  
}

  .dropdown-content {
    padding-left: 10px;
    padding-right: 10px;
  display: none;
  position: absolute;
  left: 0;
  right: 0;
  top:80px;
  background-color: #f9f9f9;
  color:rgb(20, 104, 107) !important;
 max-width: 2000px;
 height: 300px;
 width: 100%;
  /* min-width: 160px; */
   /* max-width: 1000px;  */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

/* Links inside the dropdown */
.dropdown-content a {
   float: none; 
  color: rgb(6, 245, 245);
 
  padding-left: 8px;
  padding-right: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  width: 100%;
  font-size: 12px;
  
}
.dropdown-content span {
   float: none; 
  color:  #0a361b;
  font-style: bold;
  padding-top: 16px;
  padding-left: 8px;
  padding-right: 16px;
  padding-bottom: 8px;
  text-decoration: none;
  display: block;
  text-align: left;
  width: 100%;
  font-size: 14px;
  
  
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color:rgb(215, 243, 247);
  /* background-color: #0f284e; */
  
  
}


/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
.dropbtn {
  background-color: #0a361b;
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
    rgb(20, 104, 107) !important 20px
   
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
#social{
  color: white;
  height: 60px;
width: 60px;
  margin-left: 60px;
  margin-right: 10px;
  font-size: 40px;
   
}
#social a:hover{
  font-size:60px;
  transition: ease-in;
  color:#fc9700 ;
}


#social1{
  color: white !important;
  height: 60px;
  
 
  font-size: 40px;
   
}
#social1 a:hover{
  font-size:60px;
  transition: ease-in;
  color:rgb(20, 104, 107);
}
 
/* //kkk */

 

        </style>

    </head>


</head>
<body >
    <div id="app" >
      
      <header>
      <div class="top-nav flex items-center justify-content-between ">
        <div class="top-nav-left">
          @include('nav')
      </div>
    </header>
      </div>
     <div class="bg-white">
       @yield('content')
     </div>
    <div class="">
      @include('footer')
    </div>
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
    


</html>
