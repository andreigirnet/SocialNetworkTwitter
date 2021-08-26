<x-app>
    <div>
        @foreach($users as $user)
            <a href="{{$user->path()}}"><div class="flex items-center mb-5">
                <img src="{{$user->avatar}}" alt="{{$user->username}}" class="mb-2 rounded-full" style="width: 60px; height: 60px; ">
                <h4 class="font-bold">{{'@'. $user->username}}</h4>
            </div>
            </a>
        @endforeach
        {{$users->links()}}
    </div>
</x-app>
