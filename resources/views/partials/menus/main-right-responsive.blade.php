<ul class="flex-col uppercase tracking-normal text-gray-700 text-lg">
    @guest
    <li class="py-2 hover:bg-gray-300"><a href="{{route('register')}}">Sign up </a></li>
    <li class="py-2 hover:bg-gray-300"><a href="{{route('login')}}">Log in </a></li>

    @else


    <li class="py-2 hover:bg-gray-300">
        <a href="{{ route('users.edit') }}" class="py-2 hover:bg-gray-300">My Account</a>
    </li>
    <li class="py-2 hover:bg-gray-300">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @endguest
    
</ul>