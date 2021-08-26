<x-app>

    <header class="mb-2 relative">
        <div class="relative">
            @if($user->banner_avatar)
        <img src="{{asset('storage/'.$user->banner_avatar)}}" alt="Image" class="mb-2 w-full" style="max-height: 300px; " >
            @endif
        <img src="{{$user->avatar}}" alt=""
             class=" mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left:50%; width: 100px; height: 100px; border-radius: 50%;">
        </div>

        <div class="flex justify-between items-center mb-4">

            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{$user->path('edit')}}"><button type="submit" class=" rounded-full border border-gray-300 py-2 px-4 text-black text-xs">Edit Profile</button></a>
                @endcan
                <x-follow-button :user="$user">

                </x-follow-button>
            </div>

        </div>
        <p class="text-sm">{{$user->profile_description}}</p>



    </header>


@include('_timeline',[
               'tweets' =>$tweets])
</x-app>
