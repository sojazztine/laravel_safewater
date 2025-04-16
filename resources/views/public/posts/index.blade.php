<x-public-layout>
    






<div class="px-20 mt-20">
    <h1 class="text-black my-10 font-semibold text-2xl">Recent Blog posts</h1>

    <div class="grid md:grid-cols-2 md:grid-rows-3 gap-4 p-4">

        
        <div class="col-span-1 row-span-2 flex flex-col items-center">
            <img src="{{ asset('img/img-aboutUs/image1.png') }}" alt="" class="rounded-xl mb-4">
            <div class="px-4">
                <h1 class="text-sm text-gray-500 mb-2">David Acance • 1 Jan 2025</h1>
                <h2 class="text-xl font-semibold text-black mb-3">Header title dito david</h2>
                <p class="text-black text-justify">Description dito, Description dito Description dito, Description dito Description dito, Description dito Description dito, Description dito Description dito, Description dito.</p>
            </div>
        </div>
    
        
        <div class="flex col-span-1 row-span-1 items-start space-x-4">
            <img src="{{ asset('img/img-aboutUs/image1.png') }}" alt="" class="rounded-xl w-1/2 object-cover">
            <div class="flex flex-col justify-start">
                <h1 class="text-sm text-gray-500 mb-2">David Acance • 1 Jan 2025</h1>
                <h2 class="text-xl font-semibold text-black mb-3">Header title dito david</h2>
                <p class="text-black text-justify">Description dito, Description dito Description dito, Description dito Description dito, Description dito.</p>
            </div>
        </div>
    
        
        <div class="flex col-span-1 row-span-1 items-start space-x-4">
            <img src="{{ asset('img/img-aboutUs/image1.png') }}" alt="" class="rounded-xl w-1/2 object-cover">
            <div class="flex flex-col justify-start">
                <h1 class="text-sm text-gray-500 mb-2">David Acance • 1 Jan 2025</h1>
                <h2 class="text-xl font-semibold text-black mb-3">Header title dito david</h2>
                <p class="text-black text-justify">Description dito, Description dito Description dito, Description dito Description dito, Description dito.</p>
            </div>
        </div>
    
        
        <div class="flex col-span-2 row-span-1 items-start space-x-4">
            <img src="{{ asset('img/img-aboutUs/image1.png') }}" alt="" class="rounded-xl w-1/3 object-cover">
            <div class="flex flex-col justify-start w-2/3">
                <h1 class="text-sm text-gray-500 mb-2">David Acance • 1 Jan 2025</h1>
                <h2 class="text-xl font-semibold text-black mb-3">Header title dito david</h2>
                <p class="text-black text-justify">Description dito, Description dito Description dito, Description dito Description dito, Description dito Description dito, Description dito Description dito, Description dito.</p>
            </div>
        </div>
    
    </div>
    
</div>









        <!-- Container for posts -->
        <div class="px-20 mt-20">
            <h1 class="text-black my-10 font-semibold text-2xl">All blog posts</h1>
        
        <div class="flex gap-[3vw] flex-wrap justify-center mb-20">
            @foreach ($posts->sortByDesc('created_at') as $post)
                <!-- Individual post container -->
                <div class="flex flex-col border border-transparent  w-[500px] p-5 rounded-[30px] hover:bg-[#e6e6e5] hover:border-[#e6e6e5] cursor-pointer">

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
    </div>
        <div class="w-[95%] mx-auto my-10">
            {{ $posts->links() }}
        </div>
</x-public-layout>
