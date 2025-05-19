@props(['title', 'addUrl' => null, 'text' => null])

<div class="block w-[98%] mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm mb-5  mt-[50px] ">
    <div class="flex justify-between">
        <h1 class="text-[#016262] text-lg font-bold">{{ $title }} </h1>
        @if($addUrl && $text)
            <a href="{{ $addUrl }}" class="mr-2 bg-green-700 text-white rounded-md px-5 py-2">+  Add new {{$text}}</a>
        @endif
        </div>
    <table id="search-table">
        <thead>
            <tr>
                {{ $thead }}
            </tr>
        </thead>
        <tbody>
          {{ $slot }}

        </tbody>
    </table>
</div>
