
  <div class="block lg:hidden py-2 px-3">
    <button id="nav-toggle"
      class="flex items-center outline-none px-3 py-2 rounded text-gray-300 font-bold border border-gray-300 hover:text-gray-500 hover:border-gray-500 ">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
      </svg>
    </button>
  </div>
  <!--dodatak-->

  <!--dodatak-->
  <div class="hidden lg:flex w-full" id="nav-content">
      <ul class="list-reset items-center w-full">
        
          <div class="logo flex items-center">
              <a href="/"><img src="{{asset('./img/baby.svg')}}" alt="kolica za bebe" style=""
                  class="w-16 h-16 bg-transparent py-2 pl-4 rounded-md"> </a>
                  <a href="/"><div class="font-bold text-lg xl:text-xl text-white px-2 lg:pr-4 uppercase py-2">Mob-ing</div></a>
  
            {{-- <div class="flex-1 font-bold text-lg xl:text-2xl text-white px-2 lg:pr-4 uppercase py-2">
              Mob-ing
            </div> --}}
          </div>
  
          {{-- <a class="inline-block px-2  lg:px-4 py-2 text-white text-lg  lg:text-2xl hover:no-underline no-underline"
              href="/">Home</a> --}}
       
        @foreach ($categories as $category)
  
        <li class="dropdown mr-6">
          <button>
            <a 
              class="dropbtn inline-block text-gray-200 px-2 lg:px-4 bg-transparent uppercase text-md lg:text-base no-underline hover:text-teal-300 py-5"
              href="{{route('shop.index', ['category' => $category->id])}}">{{$category->name}}</a>
          </button>
  
          <div class="dropdown-content">
            @foreach ($category->children as $child)

              <div class="flex ml-64 my-4 tracking-tight">
              <div class="">
                @if (!$child->isLeaf())
                <div class="uppercase ">
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
    
            <div class="text-base pb-1 font-bold ml-auto">
              @include('partials.menus.main-right')
            </div>
      </div>
    </ul>

