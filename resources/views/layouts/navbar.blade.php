<nav class="font-[Inter] py-3">
    <div class="flex justify-between pt-3 w-[92%] mx-auto items-center">
        <div>
            <a href="/"><img src="{{ $logo }}" alt="" class="max-w-full h-auto cursor-pointer"></a>
        </div>
        <div
            class="nav-links md:static absolute md:bg-transparent bg-[#f9fff5] rounded-md md:min-h-fit min-h-[30vh] justify-center left-0 top-[-100%] md:w-auto w-full flex items-center ml-auto px-5 transition-all duration-500 ease-in-out ">
            <ul class="flex md:flex-row flex-col gap-[1vw] md:text-center text-center md:gap-[1vw] ">

                <!-- ABOUT US NAV -->
                <li
                    class="text-[#016262] px-1 py-1 text-md md:w-25 md:h-8 lg:w-25 lg:h-9 md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold">
                    <a class="{{ request()->is('about') ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-md' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-md' }}"
                        href="{{ route('public.about-us') }}">About us</a>
                </li>

                <!-- SOLUTIONS NAV -->
                <li id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                    class="btn text-[#016262] px-1  py-1 text-md md:w-25 md:h-8 lg:w-25 lg:h-9  md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold flex  justify-center items-center"
                    type="button">
                    <a class="{{ request()->is('solution') ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-md' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-md' }}"
                        href="{{ route('public.solution') }}">Solutions</a><svg class="w-2.5 h-2.5 ms-3 flex"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </li>
                <!-- Dropdown menu in Solutions -->
                <div id="dropdownHover"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-50 ">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="{{ route('public.solutions.community-collection') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">Community Collections</a>
                        </li>
                        <li>
                            <a href="{{ route('public.solutions.restore-boards') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">Restore Boards</a>
                        </li>
                        <li>
                            <a href="{{ route('public.solutions.restore-furniture') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">Restore Furniture and Applications</a>
                        </li>
                        <li>
                            <a href="{{ route('public.solutions.restore-classroom') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">Restore-a-Classroom</a>
                        </li>
                    </ul>
                </div>

                <!-- CONTACT US NAV -->
                <li id="dropdownHoverButtonContact" data-dropdown-toggle="dropdownHoverContact" data-dropdown-trigger="hover"
                    class="text-[#016262] px-1 py-1 text-md md:w-25 md:h-8 lg:w-30 lg:h-9 md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold flex  justify-center items-center">
                    <a class="{{ request()->is('contact') ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-md' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-md' }}"
                        href="{{ route('public.contactUs') }}">Contact us</a><svg class="w-2.5 h-2.5 ms-3 flex"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </li>
                <!-- Dropdown menu in ContactUs -->
                <div id="dropdownHoverContact"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-50 ">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownHoverButtonContact">
                        <li>
                            <a href="{{ route('public.contact.faq') }}"
                                class="block px-4 py-2 hover:bg-gray-100 ">FAQ's</a>
                        </li>
                    </ul>
                </div>

                <!-- BLOG NAV -->
                <li
                    class="text-[#016262] px-1 py-1 text-md md:w-25 md:h-8 lg:w-30 lg:h-9 md:cursor-pointer cursor-pointer rounded-sm text-md transition delay-30 duration-300 ease-in-out font-bold">
                    <a class="{{ request()->is('blog') ? 'bg-[#e6e6e5] text-[#016262] py-2 px-2 rounded-md' : 'hover:bg-[#e6e6e5] py-2 px-2 rounded-md' }}"
                        href="{{ route('public.blog') }}">Blog</a>
                </li>

                <!-- ECOBIN NAV -->
                <li
                    class="text-white text-extrabold px-7 py-4 text-md md:w-35 md:h-9 bg-[#016262] border hover:border-[#016262] border-transparent hover:text-[#016262] hover:bg-[#f9fff5]  cursor-pointer rounded-full text-md transition duration-300 ease-out font-extrabold items-center flex justify-center">
                    <a href="https://ecobin.posmworks.com/login" target="_blank">Eco-bin App</a>
                </li>

            </ul>
        </div>
        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
    </div>
</nav>

<script>
    function onToggleMenu(e) {
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
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
