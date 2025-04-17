<x-public-layout>
    <div>
        <div class="ml-[20px] flex items-center mb-10 " >
            <a href="{{ route('public.blog') }}" type="button" class="text-white bg-[#016262] hover:bg-[#018266] focus:ring-4 rotate-180 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 ">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                <span class="sr-only">Icon description</span>
                </a>
                <h1 class="text-gray-500 text-lg font-medium ml-2">
                    Go Back
                </h1>
        </div>
        <div class="flex justify-center text-[#016262]">
            <div class="w-[85%]">
                <h1 class="text-3xl font-bold mb-5">
                    {{$post->title}}
                </h1>

                <p class="text-md">{{$post->publisher}} • {{$post->created_at->format('F d, Y') }}</p>
            </div>
        </div>

        <div class="flex justify-center ">
            <img src="{{Storage::url($post->image) }}" class="rounded-xl flex justify-center  w-[500px] object-fill  my-10 "  alt="Image description">
        </div>

        <div class="w-[90%] mx-auto">
            <pre class="text-wrap">
                {!! html_entity_decode($post->content) !!}

            </pre>
         </div>

    </div>
  
    <h1 class="text-3xl ml-10 font-bold text-[#016262] ">
        Recent Blog Post
    </h1>
  
    <div class="flex gap-[3vw] flex-wrap justify-center mb-20 text-[#016262]">
        @foreach ($posts->sortByDesc('created_at') as $post)
            <!-- Individual post container -->

            <div class="flex flex-col border border-transparent mt-20   w-[500px] p-5 rounded-[30px] hover:bg-[#e6e6e5] hover:border-[#e6e6e5] cursor-pointer">

                <!-- Content inside each post card (kept vertical) -->
                <a href="{{ route('public.post.showBlog', $post->id) }}">
                    <div class="flex flex-col items-center max-h-[1500px]">
                        <img src=" {{ Storage::url($post->image) }}" alt="" class="w-[504px] h-[260px] rounded-[30px] object-cover">
                        <h1 class="mt-10 text-2xl font-bold" style="overflow-wrap:anywhere;">{{ $post->title }}</h1>
                        <div class="max-h-[200px] overflow-y-auto break-words">
                            <p class=" text-lg mt-5 hover:underline" >
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
</x-public-layout>
