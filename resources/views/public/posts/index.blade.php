<x-public-layout>
    <div class="text-[#016262]">
        <div class="flex flex-col items-center mt-[50px] text-[#016262]">
            <h1 class="text-6xl font-bold leading-[100px]">Blog posts</h1>
            {{-- <p class="text-xl font-medium">our latest blog</p> --}}
        </div>

        <!-- Container for posts -->
        <div class="flex gap-[3vw] flex-wrap justify-center mb-20">
            @foreach ($posts->sortByDesc('created_at') as $post)
                <!-- Individual post container -->
                <div class="flex flex-col border border-transparent mt-20   w-[500px] p-5 rounded-[30px] hover:bg-[#e6e6e5] hover:border-[#e6e6e5] cursor-pointer">

                    <!-- Content inside each post card (kept vertical) -->
                    <a href="{{ route('public.post.showBlog', $post->id) }}">
                        <div class="flex flex-col items-center max-h-[1500px]">
                            <img src=" {{ Storage::url($post->image) }}" alt="" class="w-[504px] h-[260px] rounded-[30px] object-cover">
                            <h1 class="mt-10 text-2xl font-bold" style="overflow-wrap:anywhere;">{{ $post->title }}</h1>
                            <div class="max-h-[200px] overflow-y-auto break-words">
                                <p class=" line-clamp-5" >
                                    {{ $post->description }}
                                </p>
                            </div>
                        </div>

                        <!-- Publisher and date (horizontal) -->
                        <div class="flex flex-col  mt-5 justify-between">
                            <h5 class="text-xl font-bold" style="overflow-wrap:anywhere;">{{ $post->publisher }} </h5>
                            <p class="font-bold">{{$post->created_at->format('F d, Y') }}</p>
                        </div>
                      </a>
                    </div>


            @endforeach
        </div>
        <div class="w-[95%] mx-auto my-10">
            {{ $posts->links() }}
        </div>
    </div>
</x-public-layout>
