<x-public-layout>
    <!--
<style>
@keyframes bgAnimation {
    0%{
        background-image: url('{{ asset('img/bg.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    50% {
        background-image: url('{{ asset('img/bg2.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
}

.animate-bgAnimation {
    animation: bgAnimation 10s infinite alternate ease-in-out;
}
</style>

    <div class="relative flex justify-between items-center p-20 bg-cover bg-center bg-no-repeat bg-fixed min-h-screen animate-bgAnimation" style="background-image: url({{ asset('img/img-index/landingImage.png') }});">

        <div class="absolute inset-0 bg-black/40 z-0"></div>


        <div class="relative z-10">
            <h1 class="text-[#016262] font-bold text-7xl drop-shadow-[3px_3px_1px_#FFFFFF]">SAVING THE WORLD</h1>
            <h3 class="text-white text-xl">one plastic sachet at a time.</h3>


        </div>


        <div class="relative z-10 flex gap-[1vw]">
            <div class="rounded-tl-4xl">
                <img src="img/bulb.png" alt="restore-picture" width="300" class="rounded-tl-[150px] rounded-bl-3xl md:w-100 hidden lg:block">
            </div>
            <div class="rounded-tr-4xl">
                <img src="img/bulb.png" alt="restore-picture" width="300" class="rounded-tr-[150px] rounded-br-3xl md:w-100 hidden lg:block">
            </div>
        </div>


        <div class="lg:hidden flex gap-[1vw] w-[80%] mx-auto mt-20 relative z-10">
            <div class="rounded-tl-4xl">
                <img src="img/bulb.png" alt="restore-picture" class="rounded-tl-[80px] md:rounded-tl-[150px] rounded-bl-3xl w-400">
            </div>
            <div class="rounded-tr-4xl">
                <img src="img/bulb.png" alt="restore-picture" class="rounded-tr-[80px] md:rounded-tr-[150px] rounded-br-3xl w-400">
            </div>
        </div>
    </div> -->
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)">
            <div id="alert-3" x-show="show" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 "
                role="alert">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    Your feedback was sent! Thank you for your feedback.
                </div>
                <button type="button" @click= "show = false"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 "
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div id="animation-carousel" class="relative w-full h-screen overflow-hidden">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 z-10"></div>

        <div class="relative h-56 md:h-96">
            <!-- Carousel wrapper -->
            @foreach ($landingPages as $landingPage)
                <div class="absolute inset-0 flex transition-opacity duration-1000 ease-in-out opacity-0"
                    data-carousel-item>
                    <img src="{{ Storage::url($landingPage->image) }}"
                        class="w-full h-screen object-cover z-0 will-change-transform" data-parallax alt="...">
                </div>
            @endforeach

        </div>

        <div
            class="absolute z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center text-center">
            <h1 class="text-white font-bold text-7xl">{{ $app_title }}</h1>
            <h3 class="text-white text-3xl">{{ $app_subtitle }}</h3>

        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let items = document.querySelectorAll("[data-carousel-item]");
            let parallaxImages = document.querySelectorAll("[data-parallax]");
            let index = 0;

            function showNextImage() {
                items.forEach((item, i) => {
                    item.classList.remove("opacity-100");
                    item.classList.add("opacity-0");
                });

                items[index].classList.remove("opacity-0");
                items[index].classList.add("opacity-100");

                index = (index + 1) % items.length;
            }

            setInterval(showNextImage, 3000); // Change image every 3 seconds
            showNextImage();

            // Parallax Effect
            window.addEventListener("scroll", function() {
                let scrollPosition = window.scrollY;
                parallaxImages.forEach((img) => {
                    let speed = 0.5; // Adjust parallax speed
                    img.style.transform = `translateY(${scrollPosition * speed}px)`;
                });
            });
        });
    </script>








    <!-- The Circular Journey -->
    <div class="flex items-center justify-center my-4 mt-[100px]">
        <div class="w-1/4 border-t-2 border-[#016262]"></div>
        <span class="px-4 text-[#016262] font-bold text-4xl text-center mb-10">The Circular Journey</span>
        <div class="w-1/4 border-t-2 border-[#016262]"></div>
    </div>
    <div class="flex lg:flex-row flex-col justify-center items-center gap-[5vw]">

        <div class="flex flex-col items-center relative mb-10">
            <img src="img/img-index/throwAway.png" alt="Trash Icon" class="md:mt-11">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Analog Collection
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8 text-center">
                Reducing plastic waste the old-fashioned way
            </p>

            <div class="relative">
                <img src="img/img-index/pieceCount.png" alt="Piece Count Image" class="max-w-full h-auto">

                <div class="absolute bottom-0 left-0 w-full flex items-center justify-between p-4">
                    <h1 class="text-white text-xl font-bold">Every piece of plastic counts</h1>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black shadow-md">
                        ➝
                    </button>
                </div>
            </div>
        </div>


        <div class="flex flex-col items-center mb-10">
            <img src="img/img-index/earthCare.png" alt="Earth Care Icon" class="md:mt-10">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Waste to Boards
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8 text-center">
                Plastic segregation, but a lot smarter and a lot more fun!
            </p>

            <div class="relative">
                <img src="img/img-index/RestoreBoards.png" alt="Smart Eco Bin Image" class="max-w-full h-auto">

                <div class="absolute bottom-0 left-0 w-full flex items-center justify-between p-4">
                    <h1 class="text-white text-xl font-bold">Restore Boards</h1>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black shadow-md">
                        ➝
                    </button>
                </div>
            </div>
        </div>


        <div class="flex flex-col items-center mb-10">
            <img src="img/img-index/forest.png" alt="Forest Icon" class="lg:mt-5">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Boards to Wonder
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8 lg:w-[400px] text-center">
                Breathing new life into plastic waste with logical pragmatism and boundless creativity!
            </p>

            <div class="relative">
                <img src="img/img-index/RestoreFurnitureandApplications.png" alt="Circular Economy Image"
                    class="max-w-full h-auto">

                <div class="absolute bottom-0 left-0 w-full flex items-center justify-between p-4">
                    <h1 class="text-white text-xl font-bold">Restore Furniture and Applications</h1>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black shadow-md">
                        ➝
                    </button>
                </div>
            </div>
        </div>
    </div>





    <!-- SMART ECOBIN -->
    <div class="flex justify-center items-center mt-[80px]">
        <div
            class="flex flex-col md:flex-row items-center justify-center border-t border-b border-[#51A5BE] w-[90%] md:w-[80%] mx-auto px-4">
            <div class="w-full md:w-1/2 flex justify-center mb-10 md:mb-0">
                <img src="img/img-index/restoreMachine.png" alt="" class="max-w-full h-auto">
            </div>
            <div class="w-full md:w-1/2 md:pt-40 text-center md:text-left">
                <h1 class="md:text-6xl text-2xl font-bold text-[#016262] mb-10">Smart EcoBin</h1>
                <p class="md:text-2xl text-lg mb-6 md:leading-10 text-[#016262] font-normal">Anybody can be a hero.
                    <br>
                    Help lead the charge towards a cleaner <br> and greener future!</p>
                <p class="md:text-2xl text-lg mb-6 md:leading-10 text-[#016262] font-normal">Every piece of plastic
                    counts!</p>
                <p class="md:text-2xl text-lg mb-20 md:leading-10 text-[#016262] font-normal">Sign-up for your Smart
                    E-Collection Bin <br> account now and help make a difference!</p>
                <div class="flex gap-[1vw] flex-col md:flex-row justify-center md:justify-start">
                    <a href="https://{{ $web_login_link }}" target="_blank"
                        class="bg-[#016262] rounded-full md:px-10 py-2 px-4 text-center text-white border hover:text-[#016262] hover:border-[#016262] hover:bg-[#f9fff5] transition duration-300 ease-in-out">Login</a>
                    <a href="https://{{ $web_register_link }}" target="_blank"
                        class="bg-[#51A5BE] rounded-full md:px-10 py-2 px-4 text-center text-white border hover:text-[#51A5BE] hover:border-[#51A5BE] hover:bg-[#f9fff5] transition duration-300 ease-in-out">Register
                        Now</a>
                </div>
                <h1 class="text-2xl text-[#016262] mt-10 font-semibold">Visit our SEB Mall Locations</h1>
                <p class="text-[#016262]">Visit our SEB Mall Locations Near You!</p>
            </div>
        </div>
    </div>




    <!-- SEB MALLS -->
    <div
        class="grid grid-cols-6 grid-rows-2 sm:grid-cols-5 sm:grid-rows-1 gap-4 items-center justify-center self-start mb-10  w-[90%] mx-auto">

        <div
            class="col-span-2 sm:col-span-1 row-span-1 col-start-1 sm:col-start-1 row-start-1 sm:row-start-1 border-r border-[#51A5BE] flex items-center justify-center md:p-5">
            <img src="img/mall/up.png" alt="" class="">
        </div>
        <div
            class="col-span-2 sm:col-span-1 row-span-1 col-start-3 sm:col-start-2 row-start-1 sm:row-start-1 border-r border-[#51A5BE] flex items-center justify-center md:p-5">
            <img src="img/mall/new.png" alt="" class="">
        </div>
        <div
            class="col-span-2 sm:col-span-1 row-span-1 col-start-5 sm:col-start-3 row-start-1 sm:row-start-1 sm:border-r border-[#51A5BE] flex items-center justify-center md:p-5">
            <img src="img/mall/east.png" alt="" class=" ">
        </div>
        <div
            class="col-span-2 sm:col-span-1 row-span-1 col-start-2 sm:col-start-4 row-start-2 sm:row-start-1 border-r border-[#51A5BE] flex items-center justify-center md:p-5">
            <img src="img/mall/chinaTown.png" alt="" class="">
        </div>
        <div
            class="col-span-2 sm:col-span-1 row-span-1 col-start-4 sm:col-start-5 row-start-2 sm:row-start-1 flex items-center justify-center md:p-5">
            <img src="img/mall/grandCanal.png" alt="" class="">
        </div>
    </div>





    <!-- SACHETS COUNTER -->
    <div class="flex flex-col lg:flex-row justify-center items-center mt-[90px] px-4 lg:px-0">
        <div class="lg:pe-40 text-center lg:text-left">
            <h1 class="text-[#016262] text-3xl sm:text-4xl font-semibold leading-14 mb-5">
                Amount of Sachets Collected
            </h1>

            <h1 class="text-[#016262] text-7xl sm:text-9xl font-bold mb-10 italic lg:w-[580px]">
                {{ number_format($total_sachets) }}
            </h1>

            <h1 class="text-[#016262] text-3xl sm:text-4xl font-semibold leading-14 mb-5 lg:w-[470px]">
                Diverted as of today
            </h1>
        </div>

        <div class="mt-10 lg:mt-0">
            <img src="img/bulb.png" alt="" width="400"
                class="mx-auto rounded-tr-[300px] rounded-tl-lg rounded-b-lg hidden lg:block">
        </div>
    </div>








    <!-- JOIN THE MOVEMENT -->
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center justify-center mt-40 px-6 lg:px-20">
        <!-- Left Section -->
        <div class="flex flex-col items-center text-center mb-10 lg:mb-0">
            <img src="img/img-index/presenting.png" alt="Presenting Image" class="mb-10">
            <div class="flex flex-col sm:flex-row gap-4">
                <a href=""
                    class="text-white bg-[#016262] py-3 px-8 rounded-full text-lg sm:text-xl hover:border-[#016262] hover:text-[#016262] hover:bg-[#f9fff5] border border-transparent transition duration-300">
                    Watch our Videos
                </a>
                <a href=""
                    class="text-white bg-[#016262] py-3 px-8 rounded-full text-lg sm:text-xl hover:border-[#016262] hover:text-[#016262] hover:bg-[#f9fff5] border border-transparent transition duration-300">
                    Join the Movement
                </a>
            </div>
        </div>

        <!-- Right Section -->
        <div class="flex justify-center">
            <div class="w-full max-w-xl text-center lg:text-left">
                <h1 class="text-3xl sm:text-4xl text-[#016262] mb-6 font-bold w-full sm:w-[75%]">
                    Be part of the change you want to see in our environment!
                </h1>
                <p class="text-[#016262] text-lg sm:text-2xl leading-8 mb-4">
                    Since the pollution problem is everybody’s problem, we believe that our goal of solving the problem
                    of plastic pollution will be a lot easier to achieve through a collective effort.
                </p>
                <p class="text-[#016262] text-lg sm:text-2xl leading-8 font-medium">
                    We are stronger when we are together.
                </p>
            </div>
        </div>
    </div>









    <!-- PARTNERS -->

    <style>
        .marquee {
            animation: scrolling var(--marquee-time) linear infinite;
        }

        .marquee:hover {
            animation-play-state: paused;
        }

        @keyframes scrolling {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-1 * var(--marquee-width)));
            }
        }
    </style>
    <div class="flex justify-center mb-[10px] mt-20">
        <h1 class="text-bolder font-bold mb-5 text-2xl text-[#016262]">
            Our partners
        </h1>
    </div>
    <!-- required classes: overflow-hidden  -->
    <div class="overflow-hidden mx-auto py-2 bg-gray-100">
        <!--  required classes: marquee inline-flex max-w-full  -->
        <ul class="marquee py-3 inline-flex space-x-4 whitespace-nowrap max-w-full" x-data="Marquee({ speed: 0.5, spaceX: 4 })">
            <li class="flex-shrink-0">
                <img src="{{ asset('img/partners/scholasticas.png') }}" alt="pccr" class="max-h-20 w-auto">
            </li>
            {{-- <li class="flex-shrink-0">
                <img src="{{ asset('img/partners/pccr.png') }}" alt="pccr" class="max-h-20 w-auto">
            </li>
            <li class="flex-shrink-0">
                <img src="{{ asset('img/partners/studentCouncil.png') }}" alt="studentCouncil"
                    class="max-h-20 w-auto">
            </li>
            <li class="flex-shrink-0">
                <img src="{{ asset('img/partners/nuFairview.png') }}" alt="nuFairview" class="max-h-20 w-auto">
            </li>
            <li class="flex-shrink-0">
                <img src="{{ asset('img/partners/xavierSchool.png') }}" alt="xavierSchool" class="max-h-20 w-auto">
            </li>
            <li class="flex-shrink-0">
                <img src="{{ asset('img/partners/coaAteneo.png') }}" alt="coaAteneo" class="max-h-20 w-auto">
            </li> --}}
        </ul>
    </div>


    <script>
        const debounce = (func, wait, immediate = true) => {
            let timeout
            return () => {
                const context = this
                const args = arguments
                const callNow = immediate && !timeout
                clearTimeout(timeout)
                timeout = setTimeout(function() {
                    timeout = null
                    if (!immediate) {
                        func.apply(context, args)
                    }
                }, wait)
                if (callNow) func.apply(context, args)
            }
        }

        /**
         * Append the child element and wait for the parent's
         * dimensions to be recalculated
         * See https://stackoverflow.com/a/66172042/11784757
         */
        const appendChildAwaitLayout = (parent, element) => {
            return new Promise((resolve, _) => {
                const resizeObserver = new ResizeObserver((entries, observer) => {
                    observer.disconnect()
                    resolve(entries)
                })
                resizeObserver.observe(element)
                parent.appendChild(element)
            })
        }

        document.addEventListener('alpine:init', () => {
            Alpine.data(
                'Marquee',
                ({
                    speed = 1,
                    spaceX = 0,
                    dynamicWidthElements = false
                }) => ({
                    dynamicWidthElements,
                    async init() {
                        if (this.dynamicWidthElements) {
                            const images = this.$el.querySelectorAll('img')
                            // If there are any images, make sure they are loaded before
                            // we start cloning them, since their width might be dynamically
                            // calculated
                            if (images) {
                                await Promise.all(
                                    Array.from(images).map(image => {
                                        return new Promise((resolve, _) => {
                                            if (image.complete) {
                                                resolve()
                                            } else {
                                                image.addEventListener('load', () => {
                                                    resolve()
                                                })
                                            }
                                        })
                                    })
                                )
                            }
                        }

                        // Store the original element so we can restore it on screen resize later
                        this.originalElement = this.$el.cloneNode(true)
                        const originalWidth = this.$el.scrollWidth + spaceX * 4
                        // Required for the marquee scroll animation
                        // to loop smoothly without jumping
                        this.$el.style.setProperty('--marquee-width', originalWidth + 'px')
                        this.$el.style.setProperty(
                            '--marquee-time',
                            ((1 / speed) * originalWidth) / 100 + 's'
                        )
                        this.resize()
                        // Make sure the resize function can only be called once every 100ms
                        // Not strictly necessary but stops lag when resizing window a bit
                        window.addEventListener('resize', debounce(this.resize.bind(this), 100))
                    },
                    async resize() {
                        // Reset to original number of elements
                        this.$el.innerHTML = this.originalElement.innerHTML

                        // Keep cloning elements until marquee starts to overflow
                        let i = 0
                        while (this.$el.scrollWidth <= this.$el.clientWidth) {
                            if (this.dynamicWidthElements) {
                                // If we don't give this.$el time to recalculate its dimensions
                                // when adding child nodes, the scrollWidth and clientWidth won't
                                // change, thus resulting in this while loop looping forever
                                await appendChildAwaitLayout(
                                    this.$el,
                                    this.originalElement.children[i].cloneNode(true)
                                )
                            } else {
                                this.$el.appendChild(
                                    this.originalElement.children[i].cloneNode(true)
                                )
                            }
                            i += 1
                            i = i % this.originalElement.childElementCount
                        }

                        // Add another (original element count) of clones so the animation
                        // has enough elements off-screen to scroll into view
                        let j = 0
                        while (j < this.originalElement.childElementCount) {
                            this.$el.appendChild(this.originalElement.children[i].cloneNode(true))
                            j += 1
                            i += 1
                            i = i % this.originalElement.childElementCount
                        }
                    },
                })
            )
        })

        Alpine.start()
    </script>











    @php
        $limit = request()->query('limit');
    @endphp








    <!-- TESTIMONIALS -->
    <div class="bg-[#E7E7E7] mt-20 pb-10">
        <div class="px-6 py-12 md:px-20">
            <h1 class="text-3xl md:text-5xl font-bold text-[#016262] text-center md:text-left">
                Words from our Eco Heroes
            </h1>

            <!-- Latest testimonial images -->
            <div class="flex flex-wrap items-center justify-center md:justify-start mt-8 gap-2 md:gap-4">
                @foreach ($testimonials->sortByDesc('created_at')->take(3) as $testimonial)
                    <img src="{{ Storage::url($testimonial->image) }}" alt="Testimonial Image"
                        class="border-4 rounded-full w-[60px] h-[60px] border-[#17B67D] -ml-3 first:ml-0">
                @endforeach

                <p class="text-[#016262] text-lg mt-4 md:mt-0 md:ml-6 text-center md:text-left w-full md:w-auto">
                    Latest testimonials
                </p>
            </div>

            <!-- Testimonial Cards with Navigation Buttons outside -->
            <div class="mt-10 relative pb-10">
                <div class="flex justify-center">
                    <!-- Carousel -->
                    <div class="overflow-hidden w-full md:w-[92%]">
                        <div id="carousel" class="flex gap-6 transition-transform duration-500 ease-in-out">
                            @foreach ($testimonials as $testimonial)
                                <div class="min-w-[280px] max-w-sm shrink-0 bg-[#EBFCFC] rounded-xl p-5">
                                    <img src="{{ Storage::url($testimonial->image) }}" alt="Testimonial Picture"
                                        class="border-4 w-[55px] h-[55px] rounded-full border-[#17B67D]">
                                    <div class="h-40 overflow-auto p-2 my-5">
                                        <p class="text-[#016262] break-words">{{ $testimonial->content }}</p>
                                    </div>
                                    <p class="text-[#016262] font-semibold">{{ $testimonial->name }}</p>
                                    <p class="text-[#016262] text-sm">{{ $testimonial->company }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Navigation buttons -->
                <button id="prev"
                    class="opacity-40 absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-3 rounded-3xl hover:bg-gray-600 focus:outline-none sm:left-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>

                <button id="next"
                    class="opacity-40 absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-3 rounded-3xl hover:bg-gray-600 focus:outline-none sm:right-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <script>
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const carousel = document.getElementById('carousel');
        const cards = document.querySelectorAll('#carousel > div');
        const cardWidth = cards[0].offsetWidth + 24; // 24px is the gap between cards (tailwind gap-6)
        const totalCards = cards.length;
        let currentIndex = 0;

        // Next button functionality
        nextButton.addEventListener('click', () => {
            if (currentIndex < totalCards - 3) { // Ensure only 3 cards are shown at a time
                currentIndex++;
                carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            }
        });

        // Prev button functionality
        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            }
        });
    </script>

    </div>
    </div>






</x-public-layout>
