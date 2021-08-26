<div class=" rounded-lg mt-16">
    @forelse($tweets as $tweet)
        <div class="border border-gray-300 rounded-lg my-2">
            @include('_tweet')

        </div>
    @empty
        <p class="p-4">No tweets yet.</p>
    @endforelse
{{$tweets->links()}}
</div>
