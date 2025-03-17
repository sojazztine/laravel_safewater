
<nav class="font-[Inter] py-3">
    <div class="flex justify-between pt-3 w-[92%] mx-auto items-center">
        <div>
         <a href="/"><img src="img/restore-logo.png" alt="" class="max-w-full h-auto cursor-pointer"></a>
        </div>
        <div class="nav-links md:static absolute md:bg-transparent bg-[#f9fff5] rounded-md md:min-h-fit min-h-[30vh] justify-center left-0 top-[-100%] md:w-auto w-full flex items-center ml-auto px-5 transition-all duration-500 ease-in-out ">
            <ul class="flex md:flex-row flex-col gap-[1vw] md:text-center text-center md:gap-[1vw] ">

            <li id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="btn text-[#016262] px-1  py-1 text-md md:w-40 md:h-8 lg:w-60 lg:h-9  md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold flex  justify-center items-center" type="button"><a class="<?= $_SERVER['SCRIPT_NAME'] == "/view/productAndService.php" ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-sm' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-sm' ?>"  href="{{ route('services') }}">Product and Services</a><svg class="w-2.5 h-2.5 ms-3 flex" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </li>

                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                    </ul>
                </div>
                <li class="text-[#016262] px-1 py-1 text-md md:w-25 md:h-8 lg:w-25 lg:h-9 md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold">
                    <a class="<?= $_SERVER['SCRIPT_NAME'] == "/view/aboutUs.php" ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-sm' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-sm' ?>" href="{{ route('about')}}">About us</a>
                </li>
                <li class="text-[#016262] px-1 py-1 text-md md:w-25 md:h-8 lg:w-30 lg:h-9 md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold">
                    <a class="<?= $_SERVER['SCRIPT_NAME'] == "/view/contactUs.php" ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-sm' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-sm' ?>" href="{{ route('contact')}}">Contact us</a>
                </li>
                <li class="text-[#016262] px-1 py-1 text-md md:w-25 md:h-8 lg:w-30 lg:h-9 md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold">
                    <a class="<?= $_SERVER['SCRIPT_NAME'] == "/view/getInTouch.php" ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-sm' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-sm' ?>" href="{{ route('blog') }}">Get in touch</a>
                </li>
                <li class="text-white text-extrabold px-7 py-4 text-md md:w-35 md:h-9 bg-[#016262] border hover:border-[#016262] border-transparent hover:text-[#016262] hover:bg-[#f9fff5]  cursor-pointer rounded-full text-md transition duration-300 ease-out font-extrabold items-center flex justify-center">
                    <a href="../view/productAndService.php">Eco-bin App</a>
                </li>

            </ul>
        </div>
         <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
    </div>
</nav>

<script>
    function onToggleMenu(e){
        const navLinks = document.querySelector('.nav-links')
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }
</script>


<!-- Go to Top Button -->
<button id="scrollTopBtn"
    class="hidden fixed bottom-5 right-5 bg-[#016262] text-white px-4 py-2 rounded-full shadow-lg transition-all duration-300 hover:bg-[#17B67D]">
    ↑ Top
</button>

<script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            scrollTopBtn.classList.remove("hidden");
        } else {
            scrollTopBtn.classList.add("hidden");
        }
    });

    scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>
