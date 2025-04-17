<x-public-layout>







    <div class="px-4 sm:px-6 md:px-10 lg:px-20 mt-10 md:mt-20">
        <h1 class="text-black my-6 md:my-10 font-semibold text-xl md:text-2xl">Recent Blog posts</h1>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:grid-rows-3">

            @foreach ($recentPosts as $index => $post)

            @if ($index == 0)
           
                <a href="{{ route('public.post.showBlog', $post->id) }}" class="flex flex-col md:col-span-1 md:row-span-2 items-center">
                    <img src="{{ Storage::url($post->image) }}"  alt=""
                        class="rounded-xl mb-4  object-cover w-[200px]">
                    <div class="px-2 md:px-4">
                        <h1 class="text-sm text-gray-500 mb-2">{{ $post->publisher }} • {{$post->created_at->format('F d, Y')}}</h1>
                        <h2 class="text-lg md:text-xl font-semibold text-black mb-3">{{ $post->title }}</h2>
                        <p class="text-black text-justify text-sm md:text-base">{{ $post->description }}</p>
                    </div>
                </a>       
       
         
            @elseif($index == 1)

            <a href="{{ route('public.post.showBlog', $post->id) }}" class="flex flex-col sm:flex-row items-start gap-4 md:col-span-1 md:row-span-1">
                <img src="{{ Storage::url($post->image) }}" class="w-[200px]" alt=""
                    class="rounded-xl w-full sm:w-1/2 object-cover">
                <div class="flex flex-col justify-start">
                    <h1 class="text-sm text-gray-500 mb-2">{{ $post->publisher }} • {{ $post->created_at->format('F d, Y') }} </h1>
                    <h2 class="text-lg md:text-xl font-semibold text-black mb-3">{{ $post->title }}</h2>
                    <p class="text-black text-justify text-sm md:text-base">{{ $post->description }}</p>
                </div>
            </a>

            @elseif($index == 2)
            <a href="{{ route('public.post.showBlog', $post->id) }}" class="flex flex-col sm:flex-row items-start gap-4 md:col-span-1 md:row-span-1">
                <img src="{{ Storage::url($post->image) }}" class="w-[200px]" alt=""
                    class="rounded-xl sm:w-1/2 object-cover">
                <div class="flex flex-col justify-start">
                    <h1 class="text-sm text-gray-500 mb-2">{{$post->publisher}} • {{ $post->created_at->format('F d,Y') }}</h1>
                    <h2 class="text-lg md:text-xl font-semibold text-black mb-3">{{ $post->title }}</h2>
                    <p class="text-black text-justify text-sm md:text-base">{{ $post->description }}</p>
                </div>
            </a>

        @else
            <a href="{{ route('public.post.showBlog', $post->id) }}" class="flex flex-col sm:flex-row items-start gap-4 md:col-span-2 md:row-span-1">
                <img src=" {{Storage::url($post->image)}}" class="w-[200px]"  alt=""
                    class="rounded-xl w-full sm:w-1/3 object-cover">
                <div class="flex flex-col justify-start w-full sm:w-2/3">
                    <h1 class="text-sm text-gray-500 mb-2">{{ $post->publisher }} • {{ $post->created_at->format('F d, Y') }} </h1>
                    <h2 class="text-lg md:text-xl font-semibold text-black mb-3">{{ $post->title }}</h2>
                    <p class="text-black text-justify text-sm md:text-base">{{ $post->description }}</p>
                </div>
            </a>

            @endif

        @endforeach
        </div>
    </div>










    <!-- Container for posts -->
    <div class="px-20 mt-20">
        <h1 class="text-black my-10 font-semibold text-2xl">All blog posts</h1>

        <div class="flex gap-[3vw] flex-wrap justify-center mb-20">
            @foreach ($posts as $post)
                <!-- Individual post container -->
                <div class="flex flex-col border border-transparent  w-[500px] p-5 rounded-[30px] hover:bg-[#e6e6e5] hover:border-[#e6e6e5] cursor-pointer">

                    <!-- Content inside each post card (kept vertical) -->
                    <a href="{{ route('public.post.showBlog', $post->id) }}">
                        <div class="flex flex-col items-center max-h-[1500px]">
                            <img src=" {{ Storage::url($post->image) }}" alt=""
                                class="w-[504px] h-[260px] rounded-[30px] object-cover">
                            <h1 class="mt-10 text-2xl font-bold" style="overflow-wrap:anywhere;">{{ $post->title }}
                            </h1>
                            <div class="max-h-[200px] overflow-y-auto break-words">
                                <p class=" line-clamp-5">
                                    {{ $post->description }}
                                </p>
                            </div>
                        </div>

                        <!-- Publisher and date (horizontal) -->
                        <div class="flex flex-col  mt-5 justify-between">
                            <h5 class="text-xl font-bold" style="overflow-wrap:anywhere;">{{ $post->publisher }} </h5>
                            <p class="font-bold">{{ $post->created_at->format('F d, Y') }}</p>
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
