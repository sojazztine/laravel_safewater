<x-public-layout>
    <div>
        <div class="flex justify-center text-[#016262]">
            <div class="w-[85%]">
                <h1 class="text-3xl font-bold mb-5">
                    {{$post->title}}
                </h1>

                <p class="text-md">{{$post->publisher}}</p>
                <p class="text-md">{{$post->created_at->format('F d, Y') }}</p>
            </div>
        </div>

        <div class="flex justify-center">
            <img src="{{Storage::url($post->image) }}" class="rounded-xl h-[500px] w-[1400px] object-fill  my-10 "  alt="Image description">
        </div>

        <div class="w-[90%] mx-auto">
            <pre class="text-wrap">
                {!! html_entity_decode($post->content) !!}

            </pre>
         </div>
</x-public-layout>
