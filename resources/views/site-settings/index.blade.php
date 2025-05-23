<x-sidebar-layout>

    <x-tabSettings-layout></x-tabSettings-layout>
    <div class="block w-[94%] mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm mt-5">
        <h1 class="text-[#016262] text-lg font-bold">Logo and Hero Settings</h1>
        @if(session('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)">
                <div id="alert-3" x-show="show" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 " role="alert">
                    <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        Successfully updated!
                    </div>
                    <button type="button" @click="show = false" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <form action="{{ route('site-settings.update', $site_setting_id) }}" method="POST" class="mt-10 ml-10" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h1 class="text-md mb-5  font-bold">Preview Image</h1>
            <img id="preview" src="{{ Storage::url($logo)}}"
            alt="Preview Image" class="w-48 mb-5">
            <input type="file" name="logo" id="fileInput" accept="image/*">
            <div class="relative z-0 w-full mb-5 group mt-5 ">
                <input type="text" name="app_title" id="app_title" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-blue-600 peer"  placeholder=" "  value="{{$app_title}}" />
                <label for="web_login_link" class="peer-focus:font-medium absolute text-lg text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" >App Title</label>
            </div>
            <div class="relative z-0 w-full mb-5 group mt-5 ">
                <input type="text" name="app_subtitle" id="app_subtitle" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-blue-600 peer"  placeholder=" "  value="{{$app_subtitle}}" />
                <label for="app_subtitle" class="peer-focus:font-medium absolute text-lg text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" >App Subtitle</label>
            </div>
            <div class="relative z-0 w-full mb-5 group mt-5 ">
                <input type="text" name="app_description" id="app_description" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-blue-600 peer"  placeholder=" "  value="{{$app_description}}" />
                <label for="app_description" class="peer-focus:font-medium absolute text-lg text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" >App Description</label>
            </div>

            <button type="submit" class="px-8 py-2 rounded-md bg-green-700 text-white"> Update</button>
        </form>
    </div>


    <script>
        document.getElementById("fileInput").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("preview").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-sidebar-layout>
