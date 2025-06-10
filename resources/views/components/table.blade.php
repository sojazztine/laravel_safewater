@props(['title', 'addUrl' => null, 'text' => null])

<div class="w-[98%] mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm mb-5 mt-[50px]">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 space-y-4 md:space-y-0">
        <h1 class="text-[#016262] text-lg font-bold">{{ $title }}</h1>
        @if($addUrl && $text)
            <a href="{{ $addUrl }}" class="bg-green-700 text-white rounded-md px-5 py-2 text-sm md:text-base">
                + Add new {{ $text }}
            </a>
        @endif
    </div>

    <div class="overflow-x-auto">
        <table id="search-table" class="w-full text-left border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    {{ $thead }}
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
