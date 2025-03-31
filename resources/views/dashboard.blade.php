<x-sidebar-layout>
    <div class="flex justify-center flex-row gap-4">

            <div class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 mb-5   ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Post blogs</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $total_post }}</p>
                </div>

                <div class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 mb-5   ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Testimonials</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $total_testimonials }}</p>
                </div>

                <div class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 mb-5   ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Posts</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $total_inquiries}}</p>
                </div>


    </div>

</x-sidebar-layout>
