@unless(auth()->user()->is($user))
<form action="/profiles/{{$user->username}}/follow" method="POST">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">{{auth()->user()->following($user)?'Unfollow me':'Follow me'}}</button>
</form>
@endunless
