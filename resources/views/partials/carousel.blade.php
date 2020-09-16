<div class="carousel relative shadow-2xl bg-white">
    <div class="carousel-inner relative overflow-hidden w-full">
      <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class=" carousel-item absolute opacity-0" style="height:50vh;">
            <div class="relative block h-full w-full  text-white text-5xl text-center"> 
            <a data-turbolinks="false" href="{{route('shop.index')}}">
                         <img class=" w-full h-full" src="{{asset('./img/alvin-mahmudov-vKuEhorbvYI-unsplash.jpg')}}"  style="position: center center">
                         <div class="centered top-5 md:text-5xl text-3xl font-bold"><span>Novi online</span> <br>  shop</div> 
                     </a> 
            </div>

        </div>
        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-200 hover:text-white rounded-full bg-transparent hover:bg-gray-700 hover:bg-opacity-25 leading-tight text-center z-1 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-200 hover:text-white rounded-full bg-transparent hover:bg-gray-700 hover:bg-opacity-25 leading-tight text-center z-1 inset-y-0 right-0 my-auto">›</label>
        
        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        
        <div class="carousel-item absolute opacity-0 " style="height:50vh;">
        <a data-turbolinks="false" href="{{route('shop.index')}}"><div class="block h-full w-full bg-white text-boja text-2xl md:text-5xl text-center"><h2 class="mx-auto pt-12 text-wrap w-1/2 text-center " ><span class="font-bold ">Besplatna dostava</span> <br> za porudžbine preko 3000 din</h2></div></a>
        </div>
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-200 hover:text-white rounded-full bg-transparent hover:bg-gray-700 hover:bg-opacity-25 leading-tight text-center z-1 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-200 hover:text-white rounded-full bg-transparent hover:bg-gray-700 hover:bg-opacity-25 leading-tight text-center z-1 inset-y-0 right-0 my-auto">›</label> 
        
        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item  absolute opacity-0 " style="height:50vh;">
            <div class="relative block h-full w-full bg-green-500 text-white text-5xl text-center">
                <a data-turbolinks="false" href="{{route('shop.index')}}"><div class="centered1 top-5 rounded-xl shadow-md bg-boja text-5xl  font-bold  "><span >Biraj najbolje,</span> <br>  kupuj domaće</div>  </a>
            </div>
        </div>
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-200 hover:text-white rounded-full bg-transparent hover:bg-gray-700 hover:bg-opacity-25 leading-tight text-center z-1 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-gray-200 hover:text-white rounded-full bg-transparent hover:bg-gray-700 hover:bg-opacity-25 leading-tight text-center z-1 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class=" inline-block mr-3">
                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class=" inline-block mr-3">
                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>
        
    </div>
</div>