<!DOCTYPE html>
<html>
<!-- https://www.tailwindtoolbox.com/components/carousel -->
   <head>
    <title>Tailwind CSS Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 

        <style>
            .carousel-open:checked + .carousel-item {
                position: static;
                opacity: 100;
            }
            .carousel-item {
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }
            #carousel-1:checked ~ .control-1,
            #carousel-2:checked ~ .control-2,
            #carousel-3:checked ~ .control-3 {
                display: block;
            }
            .carousel-indicators {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
              
            }
            #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
            #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
            #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
            }

            .centered {
            position: absolute;
            top: 40%;
            left: 30%;
            transform: translate(-50%, -50%);
            }

            .centered1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            width: 500px;
            height: 250px; 
            padding-top: 50px;
            }
        </style>

</head>

<body class="bg-white font-sans leading-normal tracking-normal ">

<div class="carousel relative shadow-2xl bg-white">
    <div class="carousel-inner relative overflow-hidden w-full">
      <!--Slide 1-->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class=" carousel-item absolute opacity-0" style="height:50vh;">
            <div class="relative block h-full w-full  text-white text-5xl text-center"> 
                     <img class=" w-full h-full" src="{{asset('./img/ramin-talebi-u_b0jWnkgM0-unsplash-1.jpg')}}"  style="position: center center">
                     <div class="centered top-5 text-5xl  font-bold font-red-500"><span>Novi online</span> <br>  shop</div>  
            </div>

        </div>
        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-500 hover:text-white rounded-full bg-transparent hover:bg-gray-500 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-500 hover:text-white rounded-full bg-transparent hover:bg-gray-500 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:50vh;">
            <div class="block h-full w-full bg-white text-boja text-2xl md:text-5xl text-center"><h2 class="mx-auto pt-12 text-wrap w-1/2 text-center " ><span class="font-bold ">Besplatna dostava</span> <br> za porudžbine preko 3000 din</h2></div>
        </div>
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-500 hover:text-white rounded-full bg-transparent hover:bg-gray-500 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-500 hover:text-white rounded-full bg-transparent hover:bg-gray-500 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
        
        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 " style="height:50vh;">
            <div class="relative block h-full w-full bg-green-500 text-white text-5xl text-center">
                <div class="centered1 top-5 rounded-xl shadow-md bg-boja text-5xl  font-bold  "><span >Biraj najbolje,</span> <br>  kupuj domaće</div>  
            </div>
        </div>
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-white rounded-full bg-transparent hover:bg-gray-500 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-white rounded-full bg-transparent hover:bg-gray-500 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>
        
    </div>
</div>
</body>
<!-- https://www.tailwindtoolbox.com/components/carousel -->
</html>