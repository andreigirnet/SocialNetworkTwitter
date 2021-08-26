@auth
<h3 class="font-bold text-xl mb-4 ">Friends</h3>
<ul>

   @forelse(auth()->user()->follows as $user)
                <li class="mb-4">
                    <div >
                        <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                        <img src="{{$user->avatar}}" class="rounded-full mr-4" alt="" width="40" height="40">
                        {{$user->name}}
                        </a>
                    </div>
                </li>
        @empty
       <li class="px-6">No friends yet</li>
       @endforelse
    @endauth
</ul>
