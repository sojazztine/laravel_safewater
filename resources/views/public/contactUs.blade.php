<x-public-layout>
    <div class="flex flex-col items-center min-h-[800px]">

        <div class="flex flex-col justify-center text-center mb-[100px]">
            <h1 class="text-6xl font-bold mt-[100px] mb-[50px]">Get in touch with us</h1>
            <h1 class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h1>
        </div>
        <form class="w-full mb-[100px] " method="POST" action="">
            <div class="flex flex-col items-center">

                <div class="flex md:flex-row flex-col justify-center md:space-x-4">
                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">First name</label>
                        <input name="firstName" type="text" id="firstName" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">Surname</label>
                        <input name="surname" type="text" id="surname" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="flex md:flex-row flex-col md:space-x-4 mt-4">
                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">Company name</label>
                        <input name="companyName" type="text" id="companyName" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>

                    <div class="flex flex-col md:w-1/2 w-96">
                        <label class="text-sm font-medium text-gray-700">Email</label>
                        <input name="email" type="email" id="email" class="mt-1 px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="mt-4 flex flex-col">
                    <label class="text-sm font-medium text-gray-700">Your message</label>
                    <textarea id="message" rows="4" class="mt-1 md:w-full px-[100px] py-2 md:px-40 md:py-6    border border-gray-300 rounded-md"></textarea>
                </div>

                <div class="mt-6">
                    <button name="submit" type="submit" class="flex justify-center items-center px-4 py-2 bg-[#17B67D] border border-transparent text-white w-40    hover:bg-[#f9fff5] hover:border-[#17B67D] hover:text-[#016262] cursor-pointer rounded-full text-md transition  duration-300 ease-out ">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- CONTENT -->
    <div class="flex md:flex-row flex-col m-10 mb-20 justify-center border-b-2  text-[#016262]">

        <div class="p-10 md:border-r-2">
            <img src="../img/socialMediaImage/fb.png" alt="" class="mb-10">
            <h1 class="text-xl mb-8 font-bold">Facebook</h1>
            <h1 class="w-[75%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunta.</h1>
        </div>


        <div class="p-10 md:border-r-2">
            <img src="../img/socialMediaImage/ig.png" alt="" class="mb-10">
            <h1 class="text-xl mb-8 font-bold">Instagram</h1>
            <h1 class="w-[75%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunta.</h1>
        </div>


        <div class="p-10 md:border-r-2">
            <img src="../img/socialMediaImage/tiktok.png" alt="" class="mb-10">
            <h1 class="text-xl mb-8 font-bold">Tiktok</h1>
            <h1 class="w-[75%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunta.</h1>
        </div>


        <div class="p-10">
            <img src="../img/socialMediaImage/linkedin.png" alt="" class="mb-10">
            <h1 class="text-xl mb-8 font-bold">LinkedIn</h1>
            <h1 class="w-[75%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunta.</h1>
        </div>
    </div>

</x-public-layout>
