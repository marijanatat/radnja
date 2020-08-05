<ul class="flex space-x-6 mr-6 uppercase tracking-normal text-gray-200 items-center">
    @guest
    <li><a href="{{route('register')}}" class="hover:text-teal-300">Sign up </a></li>
    <li><a href="{{route('login')}}" class="hover:text-teal-300">Log in </a></li>

    @else


    <li>
        <a href="{{ route('users.edit') }}" class="ml-8 hover:text-teal-300">My Account</a>
    </li>
    <li>
        <a class="dropdown-item  hover:text-teal-300" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @endguest
    <li class="relative"><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart text-xl mr-2 hover:text-teal-300" aria-hidden="true"></i>
            @if (Cart::instance('default')->count()>0)
            <span class="bg-yellow-400 px-1 leading-tight rounded-full text-teal-800 text-sm absolute" style="left: 14px; top: -8px;"><span>{{Cart::instance('default')->count()}}</span>
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