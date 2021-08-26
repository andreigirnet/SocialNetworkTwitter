<ul>
    <li>
        <a href="{{route('home')}}" class="font-bold text-lg mb-4 block">
            Home
        </a>
    </li>

    <li>
        <a href="{{route('explore.index')}}" class="font-bold text-lg mb-4 block">
            Explore
        </a>
    </li>
    @auth
    <li>
        <a href="{{ route('profile', ['user' => auth()->user()]) }}" class="font-bold text-lg mb-4 block">
            Profile
        </a>
    </li>
    @endauth

    <li>
        <a class="font-bold text-lg mb-4 block text-blue-400" href="{{ url('/logout') }}"> Logout </a>
    </li>
</ul>
