 @extends('layouts.novilay') 

@section('footer')


    <div class="w-full py-8"  style="background-color: rgb(20, 104, 107);">
        <div class="flex flex-col md:flex-row items-center md:items-start container">
      <div class="md:w-1/3 h-auto">
          <ul class="list-reset leading-normal">
              <div class="flex items-center">
                  <a href=""><li class="hover:text-gray-500"><img  src="{{asset('./img/baby.svg')}}" alt="kolica za bebe" style="" class="w-12 h-12 bg-transparent p-2 rounded-md hover:bg-gray-500">  </li></a>
              <a href="" class="ime"><li class="text-xl sm:text-2xl xl:text-3xl text-white ml-2 font-semibold  mb-2" >Mob-ing</li></a>
              </div>
              <li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-address-card mr-2 hover:text-gray-500" aria-hidden="true"></i>Kneza Mihaila 37</li>
              <li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-home mr-2 hover:text-gray-500" aria-hidden="true"></i>Odžaci, Srbija</li>
              <li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-envelope mr-2 hover:text-gray-500" aria-hidden="true"></i>info.mobing@gmail.com</li>
              <li class="text-white text-base xl:text-xl  hover:text-gray-500 "><i class="fa fa-phone-square mr-2 hover:text-gray-500" aria-hidden="true mt-2"></i>063/555-555 </li>
            
          </ul>
      </div>
      <div class="md:w-1/3 h-auto">  
          <ul class="list-reset leading-normal mt-8">
            <a href="{{route('about')}}"><li class="text-white text-base xl:text-xl hover:text-gray-500 "><i class="fa fa-angle-double-left  mr-2" aria-hidden="true"></i>O nama</li></a>
          <a href="{{route('porucivanje')}}"><li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-angle-double-left  mr-2 " aria-hidden="true"></i>Uputstvo za kupovinu</li></a>
          <a href="{{route('placanje')}}"><li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-angle-double-left  mr-2 " aria-hidden="true"></i>Plaćanje</li></a>
          <a href="{{route('isporuka')}}"><li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-angle-double-left  mr-2 " aria-hidden="true"></i>Isporuka</li></a>
              <a href="{{route('reklamacije')}}"><li class="text-white text-base xl:text-xl hover:text-gray5700"><i class="fa fa-angle-double-left  mr-2 " aria-hidden="true"></i>Reklamacije</li></a>
              <a href="{{route('otkazivanje')}}"><li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-angle-double-left  mr-2 " aria-hidden="true"></i>Otkazivanje porudžbine</li></a>
          <a href="{{route('privatnost')}}"><li class="text-white text-base xl:text-xl hover:text-gray-500"><i class="fa fa-angle-double-left  mr-2 " aria-hidden="true"></i>Politika privatnosti</li></a>
          </ul>
    
      </div>
      <div class="md:w-1/3 h-auto">
            <p class="text-white text-base hover:text-gray-500 pb-2 text-center mt-8 md:mt-0">Ovde nas možete pronaći:</p>
            {{-- <iframe  class="mapa w-64 h-56 md:w-96 md:h-64 pb-2" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1398.1260028649447!2d19.257321988241856!3d45.50500542734718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1594243180190!5m2!1ssr!2srs"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
            <div class="mapouter"><div class="gmap_canvas"><iframe class="mx-auto md:ml-12 w-72 lg:w-96 " width="384" height="256" id="gmap_canvas" src="https://maps.google.com/maps?q=Kneza%20Mihaila%2021%2C%20%D0%9E%D1%9F%D0%B0%D1%86%D0%B8&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:256px;width:384px;}.gmap_canvas {overflow:hidden;background:none!important;height:256px;width:384px;}</style></div>
        
      </div>
       
    
     </div>
    </div>
    
    {{-- <div class= "ml-4 bg-gray-800 text-white p-2 w-full" style="">
        <div class="flex  items-center ">
            <p class=" flex-1 text-sm  xs:text-xl ml-2 xl:ml-20">Designed &amp; Developed by: <a href="" class="text-blue-500">Bane </a><span class="text-blue-500">&</span><a href="" class=" text-blue-500"> Marijana</a></p>
            <p class=" flex-1 mr-2 md:mr-20">Copyright © 2020 <a href="#" class="text-blue-500">Mob-ing</a>. Sva prava zadržana</p>
          
        </div>
    </div> --}}
     <div>
        @include('partials.footer')
    </div> 


  

@endsection