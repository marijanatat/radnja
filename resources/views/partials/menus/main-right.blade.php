<ul class="flex-col md:flex-row md:flex-no-wrap md:space-x-6 md:mr-6 uppercase 
tracking-normal text-gray-700 md:text-gray-200 md:items-center md:space-y-0 space-y-3">
    @guest
    <li class="py-3 md:py-0 md:hover:text-teal-300"><a href="{{route('register')}}">Registrujte se </a></li>
    <li><a href="{{route('login')}}" class="md:hover:text-teal-300 py-3 md:py-0">Prijavite se </a></li>

    @else


    <li>
        <a href="{{ route('users.edit') }}" class="ml-8 hover:text-teal-300 py-3 md:py-0">Moj nalog</a>
    </li>
    <li>
        <a class="hover:text-teal-300" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            {{ __('Odjavite se') }}
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @endguest
    <li class="relative hidden md:block"><a href="{{route('cart.index')}}">
        {{-- <i class="fa fa-shopping-cart text-xl mr-2 hover:text-teal-300" aria-hidden="true"></i> --}}
        <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 446.853 446.853" style="enable-background:new 0 0 446.853 446.853;" xml:space="preserve">
            <g >
                <path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708   c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179   c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591   l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916   c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012   s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675   c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432   c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221   c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814   c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z    M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117   S337.916,409.814,327.373,409.814z"/>
            </g>           
        </svg>
            @if (Cart::instance('default')->count()>0)
            <span class="bg-yellow-400 leading-tight rounded-full text-teal-800 text-sm absolute" style="left: 14px; top: -8px; padding: 1px 5px 1px 5px;"><span>{{Cart::instance('default')->count()}}</span>
                @endif
        </a></li>
    {{-- @foreach($items as $menu_item)
        <li>
            <a href="{{ $menu_item->link() }}">
    {{ $menu_item->title }}
    @if ($menu_item->title==='Cart')
    @if (Cart::instance('default')->count()>0)
    <span class="cart-count"><span>{{Cart::instance('default')->count()}}</span>
        @endif
        @endif
        </a>
        </li>
        @endforeach --}}
</ul>