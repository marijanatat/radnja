<ul class="flex-col uppercase tracking-normal text-gray-700 text-lg">
    @guest
    <li class="py-2 hover:bg-gray-300"><a href="{{route('register')}}">Registrujte se </a></li>
    <li class="py-2 mt-2 hover:bg-gray-300"><a href="{{route('login')}}">Prijavite se </a></li>

    @else


    <li class="py-2 hover:bg-gray-300">
        <a href="{{ route('users.edit') }}" class="py-2 hover:bg-gray-300">Moj nalog</a>
    </li>
    <li class="py-2 mt-2 hover:bg-gray-300">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            {{ __('Odjavite se') }}
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @endguest
    
</ul>