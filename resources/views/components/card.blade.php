<div class="flex justify-center flex-wrap">
    <div class="w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 mb-5">
        <div class="flex justify-between items-start">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                {{ $title }}
            </h5>
            {!! $icon ?? '' !!}
        </div>
        <p class="font-normal text-gray-700">
            {{ $slot }}
        </p>
    </div>
</div>
