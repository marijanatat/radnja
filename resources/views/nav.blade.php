
 

    <div class="flex w-full justify-between items-center md:hidden py-2 px-3" >
    <button id="nav-toggle"  
      class="flex items-center outline-none focus:outline-none px-3 py-2 text-gray-300 font-bold hover:text-gray-500 hover:border-gray-500 ">
      <svg class="fill-current h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />  
      </svg>
    </button>
    <div class="font-bold text-gray-200"><a href="/">Mob-ing</a></div>
    <div class="relative md:hidden"><a href="{{route('cart.index')}}">
      {{-- <i class="fa fa-shopping-cart text-xl mr-2 hover:text-teal-300" aria-hidden="true"></i> --}}
      <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 446.853 446.853" style="enable-background:new 0 0 446.853 446.853;" xml:space="preserve">
          <g >
              <path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708   c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179   c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591   l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916   c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012   s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675   c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432   c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221   c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814   c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z    M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117   S337.916,409.814,327.373,409.814z"/>
          </g>           
      </svg>
          @if (Cart::instance('default')->count()>0)
          <span class="bg-yellow-400 px-1 leading-tight rounded-full text-teal-800 text-sm absolute" style="left: 14px; top: -8px;"><span>{{Cart::instance('default')->count()}}</span>
              @endif
      </a>
    </div>
  </div>  
  <!--dodatak-->

  <!--dodatak-->
   <div class="w-full hidden flex-grow md:justify-start md:flex md:items-end md:w-auto bg-gray-100 md:bg-transparent pb-6 md:pb-0 md:-mt-1 pt-4 md:pt-1  " id="nav-content" >
      <ul class="flex-col md:flex-row list-reset md:justify-start md:items-center w-3/4 md:w-full ">
        
          <div class="flex items-center -ml-4  md:ml-16">
              <a href="/"><img src="{{asset('./img/baby.svg')}}" alt="kolica za bebe" style=""
                  class="hidden md:block w-4 h-4 md:h-12 md:w-12 bg-transparent  rounded-md"> </a>
                  <a href="/"><div class="font-bold text-lg xl:text-xl text-white px-2 lg:pr-4 uppercase py-2 hidden md:block">Mob-ing</div></a> 
          </div>
          
         @include('partials.dropdown-responsive') 
       
         <div class="hidden md:flex">
           @foreach ($categories as $category)
     
           {{-- <li class="dropdown mr-6 -ml-4 -mt-8 ">  --}}
             <li class="dropdown mr-6">
            <button>
              <a 
                class="dropbtn inline-block text-gray-200 md:px-2 lg:px-4 bg-transparent uppercase text-md lg:text-base no-underline hover:text-teal-300 py-3 md:py-5"
                href="{{route('shop.index', ['category' => $category->id])}}">{{$category->name}}</a>
            </button>
    
            <div class="dropdown-content">
              @foreach ($category->children as $child)
  
                <div class="flex md:ml-64 my-4 tracking-tight">
                  <div>
                {{-- <div class="" style="margin-top:-10;margin-left: 200px;margin-right:-100px;background-color: transparent; z-index:10 ;" > --}}
                  @if (!$child->isLeaf())
                  <div class="uppercase"  >
                    <a href="{{route('shop.index', ['category' => $child->id])}}" class="text-gray-700 hover:text-teal-300">{{$child->name}}</a>
                  </div>
                    @foreach ($child->children as $ch)
    
                    <div class="flex-col">
                      <a href="{{route('shop.index', ['category' => $ch->id])}}" class="text-gray-700 text-sm hover:text-teal-300">{{$ch->name}}</a>
                    </div>
                    @endforeach
                    @else
                    <div class="flex-col">
                      <a href="{{route('shop.index', ['category' => $child->id])}}" class="text-gray-700 hover:text-teal-300">{{$child->name}}</a>
                    </div>
                    @endif
                  </div>
  
                </div>
                @endforeach
            </div>
    
          </li>
          @endforeach
         </div>
    
            {{-- <div class="text-base pb-1  font-bold ml-auto">
              @include('partials.menus.main-right')
            </div> --}}
            
            <div class="hidden md:inline-flex items-center md:ml-auto md:space-x-6 mr-6 uppercase tracking-tight text-md md:text-base text-gray-200 mt-2 md:mt-0">
              @include('partials.menus.main-right')
            </div>
     
    </ul>
  </div> 
   


 