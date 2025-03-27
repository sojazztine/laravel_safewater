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
            <img src="{{Storage::url($post->image) }}" class="rounded-xl h-[800px] w-[1200px] object-fill  my-10 "  alt="Image description">
        </div>

        <div class="flex w-[90%] mx-auto mb-5">
            <pre class="text-wrap">
                {!! preg_replace('/<span class="ql-ui" contenteditable="false"><\/span>/', '', $post->content) !!}
            </pre>
         </div>
</x-public-layout>
