
<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea  name="body" class="w-full" placeholder="what's up" required >

        </textarea>
        <hr class="my-4">
        @auth
        <footer class="flex justify-between items-center">
            <img src="{{auth()->user()->avatar}}" class=" rounded-full mr-4" style = "width:50px; height:45px"  alt="">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-10 text-sm text-white">Publish</button>
        </footer>
            @endauth
    </form>
    @error('body')
        <p class="text-red-500 text-sm">{{$message}}</p>
    @enderror
</div>
