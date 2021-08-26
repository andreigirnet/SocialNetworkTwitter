<x-master>
    <section class="px-8 ">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                <div class="lg:w-32">
                    @include('_sidebar-links')
                </div>



                <div class="lg:flex-1 lg:mx-10" style="max-width:800px">
                    {{$slot}}
                </div>
                <div class=" border border-blue-300 rounded-lg lg:m-1/6 px-3 py-5 bg-blue-200 " style="height:300px;">
                    @include('_friends-list')
                </div>

            </div>

        </main>
    </section>
</x-master>
