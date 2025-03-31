<x-public-layout>
    <div>
        <div class="flex flex-col items-center mt-[50px] text-[#016262]">
            <h1 class="text-5xl font-bold">Contact Us</h1>
        </div>
    </div>


    <div class="flex flex-col items-center my-10 gap-10">
        <div class="w-[35%]">
            <div class="flex items-center p-5">
                <img class="me-5" src="{{asset('img/img-contact/fb.png')}}" alt="">
                <divv class="border w-[100%] rounded-xl bg-[#EBFCFC] p-5">
                    <h1 class="text-[#016262] text-sm">https://www.facebook.com/restoresolutionsph</h1>
                </divv>
            </div>
            <div class="flex items-center p-5">
                <img class="me-5" src="{{asset('img/img-contact/ig.png')}}" alt="">
                <divv class="border w-[100%] rounded-xl bg-[#EBFCFC] p-5">
                    <h1 class="text-[#016262] text-sm">https://www.instagram.com/restoresolutionsph</h1>
                </divv>
            </div>
            <div class="flex items-center p-5">
                <img class="me-5" src="{{asset('img/img-contact/yt.png')}}" alt="">
                <divv class="border w-[100%] rounded-xl bg-[#EBFCFC] p-5">
                    <h1 class="text-[#016262] text-sm">https://youtube.com/@restoresolutionsph</h1>
                </divv>
            </div>
            <div class="flex items-center p-5">
                <img class="me-5" src="{{asset('img/img-contact/tt.png')}}" alt="">
                <divv class="border w-[100%] rounded-xl bg-[#EBFCFC] p-5">
                    <h1 class="text-[#016262] text-sm">https://www.tiktok.com/@restoresolutions</h1>
                </divv>
            </div>
            <div class="flex items-center p-5">
                <img class="me-5" src="{{asset('img/img-contact/li.png')}}" alt="">
                <divv class="border w-[100%] rounded-xl bg-[#EBFCFC] p-5">
                    <h1 class="text-[#016262] text-sm">https://www.linkedin.com/@restoresolutionsph</h1>
                </divv>
            </div>
        </div>
    </div>

    <!-- MODAL -->
<div id="modal" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="relative flex flex-col items-center border rounded-3xl w-[90%] md:w-[50%] p-8 bg-white shadow-lg">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-5 right-5 text-gray-500 hover:text-gray-700 text-4xl">&times;</button>

        <div class="text-center mb-[30px] w-[85%]">
            <h1 class="text-3xl font-bold mt-10 mb-3">Get in touch with us</h1>
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
        </div>

        <form class="w-full mb-10" method="POST" action="{{ route('inquiries.store') }}">
            @csrf
            <div class="flex flex-col items-center">
                <div class="flex md:flex-row flex-col justify-center md:space-x-4">
                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">First name</label>
                        <input name="first_name" type="text" id="firstName" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">Surname</label>
                        <input name="last_name" type="text" id="surname" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="flex md:flex-row flex-col md:space-x-4 mt-4">
                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">Company name</label>
                        <input name="company_name" type="text" id="companyName" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">Email</label>
                        <input name="email" type="email" id="email" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="mt-4 flex flex-col w-[55%]">
                    <label class="text-sm font-medium text-gray-700">Your message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                </div>

                <div class="mt-6">
                    <button name="submit" type="submit" class="flex justify-center items-center px-4 py-2 bg-[#016262] border border-transparent text-white w-40 font-semibold hover:bg-[#f9fff5] hover:border-[#17B67D] hover:text-[#016262] cursor-pointer rounded-full text-md transition duration-300 ease-out">
                        Send
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


    <div class="flex justify-center">
        <div class="w-[30%] text-center flex flex-col items-center justify-center">
            <h1 class="my-5">Got any questions about our product, solutions, or initiatives? We're here to help you contribute to a cleaner, greener future. Let's talk!</h1>
            <button onclick="openModal()" name="submit" type="submit" class="flex justify-center items-center px-4 py-2 bg-[#016262] border border-transparent text-white w-40   font-semibold hover:bg-[#f9fff5] hover:border-[#17B67D] hover:text-[#016262] cursor-pointer rounded-full text-md transition  duration-300 ease-out mb-5">Write a Letter</button>
        </div>
    </div>


    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>

</x-public-layout>
