<x-public-layout>
    <div>
        <div class="flex justify-center text-[#016262]">
            <div class="w-[85%]">
                <h1 class="text-3xl font-bold mb-5">
                    {{$post->title}}
                </h1>

                <p class="text-md">{{$post->publisher}}</p>
                <p class="text-md">December 24, 2025 . 5 min read</p>
            </div>
        </div>

        <div class="flex justify-center">
            <img src="images/post/{{ $post->image }}" class="rounded-xl w-[65%] my-10" alt="Image description">
        </div>

        <div class="flex justify-center mb-5">
        {!! $post->content !!}

        {{-- <div>
            <div class="flex justify-center mt-10 text-[#016262]">
                <div class="flex justify-between w-[85%]">
                    <h1 class="text-3xl font-bold">Lorem Ipsum</h1>
                    <h1 class="border-b-2 border-[#016262]"><a href="#">View All</a></h1>
                </div>
            </div>


            <div class="my-10 flex justify-center gap-10 text-[#016262]">
                <div class="flex flex-col w-[25%]">
                    <img src="{{ asset('img/img1.png') }}" class="rounded-xl" alt="">
                    <h1 class="my-5 text-lg font-semibold">
                        Lorem ipsum dolor sit amet, consectetur
                    </h1>
                    <p class="mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <h1>
                        John Doe
                    </h1>
                    <p>December 24, 2025 . 5 min read</p>
                </div>

                <div class="flex flex-col w-[25%]">
                    <img src="{{ asset('img/img1.png') }}" class="rounded-xl" alt="">
                    <h1 class="my-5 text-lg font-semibold">
                        Lorem ipsum dolor sit amet, consectetur
                    </h1>
                    <p class="mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <h1>
                        John Doe
                    </h1>
                    <p>December 24, 2025 . 5 min read</p>
                </div>

                <div class="flex flex-col w-[25%]">
                    <img src="{{ asset('img/img1.png') }}" class="rounded-xl" alt="">
                    <h1 class="my-5 text-lg font-semibold">
                        Lorem ipsum dolor sit amet, consectetur
                    </h1>
                    <p class="mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <h1>
                        John Doe
                    </h1>
                    <p>December 24, 2025 . 5 min read</p>
                </div>
            </div>

        </div> --}}
    </div>
</x-public-layout>
