<x-public-layout>
    <div>
        <div class="flex flex-col items-center mt-[50px] text-[#016262]">
            <h1 class="text-5xl font-bold">Contact Us</h1>
        </div>
    </div>


    <div class="flex justify-center my-10 gap-10">
        <div class="flex justify-center">
            <div class="p-10">
                <div class="flex items-center p-5">
                    <img class="me-5" src="{{ asset('img/img-contact/fb.png') }}" alt="">
                    <div class="border w-[90%] rounded-xl bg-[#EBFCFC] p-5">
                        <h1 class="text-[#016262] text-xs sm:text-sm md:text-base lg:text-lg">https://www.facebook.com/restoresolutionsph</h1>
                    </div>
                </div>
                <div class="flex items-center p-5">
                    <img class="me-5" src="{{ asset('img/img-contact/ig.png') }}" alt="">
                    <div class="border w-[90%] rounded-xl bg-[#EBFCFC] p-5">
                        <h1 class="text-[#016262] text-xs sm:text-sm md:text-base lg:text-lg">https://www.instagram.com/restoresolutionsph</h1>
                    </div>
                </div>
                <div class="flex items-center p-5">
                    <img class="me-5" src="{{ asset('img/img-contact/yt.png') }}" alt="">
                    <div class="border w-[90%] rounded-xl bg-[#EBFCFC] p-5">
                        <h1 class="text-[#016262] text-xs sm:text-sm md:text-base lg:text-lg">https://youtube.com/@restoresolutionsph</h1>
                    </div>
                </div>
                <div class="flex items-center p-5">
                    <img class="me-5" src="{{ asset('img/img-contact/tt.png') }}" alt="">
                    <div class="border w-[90%] rounded-xl bg-[#EBFCFC] p-5">
                        <h1 class="text-[#016262] text-xs sm:text-sm md:text-base lg:text-lg">https://www.tiktok.com/@restoresolutions</h1>
                    </div>
                </div>
                <div class="flex items-center p-5">
                    <img class="me-5" src="{{ asset('img/img-contact/li.png') }}" alt="">
                    <div class="border w-[90%] rounded-xl bg-[#EBFCFC] p-5">
                        <h1 class="text-[#016262] text-xs sm:text-sm md:text-base lg:text-lg">https://www.linkedin.com/@restoresolutionsph</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- MODAL -->
<div id="modal" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="relative flex flex-col items-center border rounded-3xl w-[90%] md:w-[50%] lg:w-[40%] p-8 bg-white shadow-lg">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-5 right-5 text-gray-500 hover:text-gray-700 text-4xl">&times;</button>

        <div class="text-center mb-[30px] w-full">
            <h1 class="text-3xl font-bold mt-10 mb-3">Get in touch with us</h1>
            <h1 class="text-sm md:text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
        </div>

        <form class="w-full mb-10" method="POST" action="{{ route('inquiries.store') }}" id="inquiryForm">
            @csrf
            <div class="flex flex-col items-center">
                <!-- First Name and Surname -->
                <div class="flex flex-col md:flex-row md:space-x-4 w-full">
                    <div class="flex flex-col w-full md:w-1/2">
                        <label class="text-sm font-medium text-gray-700">First name</label>
                        <input name="first_name" type="text" id="firstName" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col w-full md:w-1/2 mt-4 md:mt-0">
                        <label class="text-sm font-medium text-gray-700">Surname</label>
                        <input name="last_name" type="text" id="surname" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- Company Name and Email -->
                <div class="flex flex-col md:flex-row md:space-x-4 mt-4 w-full">
                    <div class="flex flex-col w-full md:w-1/2">
                        <label class="text-sm font-medium text-gray-700">Company name</label>
                        <input name="company_name" type="text" id="companyName" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col w-full md:w-1/2 mt-4 md:mt-0">
                        <label class="text-sm font-medium text-gray-700">Email</label>
                        <input name="email" type="email" id="email" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- Message -->
                <div class="mt-4 flex flex-col w-full md:w-[55%]">
                    <label class="text-sm font-medium text-gray-700">Your message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button id="submitButton" name="submit" type="submit"
                        class="flex justify-center items-center px-4 py-2 bg-[#016262] border border-transparent text-white w-full sm:w-40 font-semibold hover:bg-[#f9fff5] hover:border-[#17B67D] hover:text-[#016262] cursor-pointer rounded-full text-md transition duration-300 ease-out">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



    <div class="flex justify-center px-4">
        <div class="w-full sm:w-[50%] md:w-[40%] lg:w-[30%] text-center flex flex-col items-center justify-center">
            <h1 class="my-5 text-lg sm:text-xl md:text-2xl">Got any questions about our product, solutions, or initiatives? We're here to help you contribute to a cleaner, greener future. Let's talk!</h1>
            <button onclick="openModal()" name="submit" type="submit"
                class="flex justify-center items-center px-4 py-2 bg-[#016262] border border-transparent text-white w-40 font-semibold hover:bg-[#f9fff5] hover:border-[#17B67D] hover:text-[#016262] cursor-pointer rounded-full text-md transition duration-300 ease-out mb-5">
                Write a Letter
            </button>
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
