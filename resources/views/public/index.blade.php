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

        <div class="absolute z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center text-center">
                <h1 class="text-white font-bold text-7xl">{{$app_title}}</h1>
                <h3 class="text-white text-3xl">{{$app_subtitle}}</h3>

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
        <span class="px-4 text-[#016262] font-bold text-4xl">The Circular Journey</span>
        <div class="w-1/4 border-t-2 border-[#016262]"></div>
    </div>
    <div class="flex lg:flex-row flex-col justify-center items-center gap-[5vw]">

        <div class="flex flex-col items-center relative">
            <img src="img/img-index/throwAway.png" alt="Trash Icon" class="md:mt-11">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Analog Collection
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8">
                Reducing plastic waste the old-fashioned way
            </p>

            <div class="relative">
                <img src="img/img-index/pieceCount.png" alt="Piece Count Image"
                    class="hidden lg:block max-w-full h-auto">

                <div class="absolute bottom-0 left-0 w-full flex items-center justify-between p-4">
                    <h1 class="text-white text-xl font-bold">Every piece of plastic counts</h1>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black shadow-md">
                        ➝
                    </button>
                </div>
            </div>
        </div>


        <div class="flex flex-col items-center ">
            <img src="img/img-index/earthCare.png" alt="Earth Care Icon" class="md:mt-10">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Waste to Boards
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8 ">
                Plastic segregation, but a lot smarter and a lot more fun!
            </p>

            <div class="relative">
                <img src="img/img-index/RestoreBoards.png" alt="Smart Eco Bin Image"
                    class="hidden lg:block max-w-full h-auto">

                <div class="absolute bottom-0 left-0 w-full flex items-center justify-between p-4">
                    <h1 class="text-white text-xl font-bold">Restore Boards</h1>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black shadow-md">
                        ➝
                    </button>
                </div>
            </div>
        </div>


        <div class="flex flex-col items-center">
            <img src="img/img-index/forest.png" alt="Forest Icon" class="lg:mt-5">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Boards to Wonder
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8 lg:w-[400px]">
                Breathing new life into plastic waste with logical pragmatism and boundless creativity!
            </p>

            <div class="relative">
                <img src="img/img-index/RestoreFurnitureandApplications.png" alt="Circular Economy Image"
                    class="hidden lg:block max-w-full h-auto">

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
    <div class="flex justify-center items-center mt-[80px] ">
        <div class="flex items-center justify-center border-t border-b border-[#51A5BE] w-[80%] mx-auto">
            <div class="hidden md:block">
                <img src="img/img-index/restoreMachine.png" alt="">
            </div>
            <div class="">
                <h1 class="md:text-6xl text-2xl font-bold text-[#016262] mb-10">Smart EcoBin</h1>
                <p class="md:text-2xl text-lg mb-6 md:leading-10 text-[#016262] font-normal">Anybody can be a hero. <br>
                    Help lead the charge towards a cleaner <br> and greener future!</p>
                <p class="md:text-2xl text-lg mb-6 md:leading-10 text-[#016262] font-normal">Every piece of plastic
                    counts!</p>
                <p class="md:text-2xl text-lg mb-20 md:leading-10 text-[#016262] font-normal ">Sign-up for your Smart
                    E-Collection Bin <br> account now and help make a difference!</p>
                <div class="flex gap-[1vw] flex-col md:flex-row">
                    <a href="https://{{ $web_login_link }}"  target="_blank" class="bg-[#016262] rounded-full   md:px-10 py-2 px-4 text-center text-white border hover:text-[#016262] hover:border-[#016262] hover:bg-[#f9fff5] transition delay-30 duration-300 ease-in-out">Login</a>
                    <a href="https://{{ $web_register_link }}"  target="_blank" class="bg-[#51A5BE] rounded-full   md:px-10 py-2 px-4 text-center text-white border hover:text-[#51A5BE] hover:border-[#51A5BE] hover:bg-[#f9fff5] transition delay-30 duration-300 ease-in-out">Register Now</a>
                </div>
                <h1 class="text-2xl text-[#016262] mt-10 font-semibold">Visit our SEB Mall Locations</h1>
                <p class="text-[#016262] ">Visit our SEB Mall Locations Near You!</p>
            </div>
        </div>
    </div>







    <!-- SEB MALLS -->
    <div class="flex items-center justify-center self-start mb-10 flex-wrap lg:flex-row flex-col w-[90%] mx-auto">

        <div class="border-r border-[#51A5BE] flex flex-col items-center justify-center p-10">
            <img src="img/mall/up.png" alt="" class="object-cover w-70 h-30">
            <!-- <h5 class="text-lg text-[#016262] font-bold">Uptown Mall</h5>
            <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p> -->
        </div>
        <div class="border-r border-[#51A5BE] flex flex-col items-center justify-center p-10">
            <img src="img/mall/new.png" alt="" class="object-cover w-50 h-30">
            <!-- <h5 class="text-lg text-[#016262] font-bold">Newport Mall</h5>
            <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p> -->
        </div>
        <div class="border-r border-[#51A5BE] flex flex-col items-center justify-center p-10">
            <img src="img/mall/east.png" alt="" class=" object-cover w-50 h-30">
            <!-- <h5 class="text-lg text-[#016262] font-bold">Eastwood Mall</h5>
            <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p> -->
        </div>
        <div class="border-r border-[#51A5BE] flex flex-col items-center justify-center p-10">
            <img src="img/mall/chinaTown.png" alt="" class="object-cover w-70 h-30">
            <!-- <h5 class="text-lg text-[#016262] font-bold">Lucky Chinatown Mall</h5>
            <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p> -->
        </div>
        <div class=" flex flex-col items-center justify-center p-10">
            <img src="img/mall/grandCanal.png" alt="" class="object-cover w-50 h-30">
            <!-- <h5 class="text-lg text-[#016262] font-bold w-60">Venice Grand Canal Mall</h5>
            <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p> -->
        </div>
    </div>





    <!-- SACHETS COUNTER -->
    <div class="flex  justify-center mt-[90px]">
        <div class="pe-40">
            <h1 class="text-[#016262] text-4xl font-semibold lg:w-[470px] leading-14 mb-5">
                Amount of Sachets Collected
            </h1>

            <h1 class="text-[#016262] text-9xl font-bold mb-10 lg:w-[580px] italic">
                {{ number_format($total_sachets) }}
            </h1>

            <h1 class="text-[#016262] text-4xl font-semibold lg:w-[470px] leading-14 mb-5">
                Diverted as of today
            </h1>
        </div>

        <div class="">
            <img src="img/bulb.png" width="400" alt=""
                class="rounded-tr-[300px] rounded-tl-lg rounded-b-lg hidden lg:block">
        </div>
    </div>







    <!-- JOIN THE MOVEMENT -->
    <div class=" items-center justify-center mt-40 grid grid-cols-1 lg:grid-cols-2 grid-rows-1">
        <div class=" flex flex-col items-center">
            <img src="img/img-index/presenting.png" alt="Presenting Image" class="hidden lg:block mb-10">
            <div class="flex">
                <a href=""
                    class="me-3 text-white bg-[#016262] py-3 px-12 rounded-full text-xl hover:border-[#016262] hover:text-[#016262] hover:bg-[#f9fff5] border border-transparent transition delay-30 duration-300 ease-in-out  ">Watch
                    our Videos</a>
                <a href=""
                    class=" text-white bg-[#016262] py-3 px-12 rounded-full text-xl hover:border-[#016262] hover:text-[#016262] hover:bg-[#f9fff5] border border-transparent transition delay-30 duration-300 ease-in-out  ">Join
                    the Movement</a>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="w-[75%]">
                <h1 class="text-4xl text-[#016262] mb-8 font-bold w-[50%]">Be part of the change you want to see in our
                    environment!</h1>
                <p class="text-[#016262] text-2xl lg:w-[600px] leading-8 font-medium">Since the pollution problem is
                    everybody’s problem, we believe that our goal of solving the problem of plastic pollution will be a
                    lot easier to achieve through a collective effort.</p>
                <p class="mt-5 mb-20 text-[#016262] text-2xl lg:w-145 leading-8 font-medium">We are stronger when we
                    are together.</p>
            </div>
        </div>

    </div>







    <!-- PARTNERS -->
    <div class="mt-[150px]">
        <div class="flex justify-center mb-[10px]">
            <h1 class="text-bolder font-bold mb-5 text-2xl text-[#016262]">
                Our partners
            </h1>
        </div>
        <marquee width="100%" direction="right" scrollamount="12">
            <div class="flex items-center flex-wrap justify-center md:gap-[3vw] overflow-hidden  ">
                <img src="img/partners/scholasticas.png" alt="Scholasticas Image">
                <img src="img/partners/pccr.png" alt="PCCR Image">
                <img src="img/partners/studentCounsil.png" alt="Student Counsil Image">
                <img src="img/partners/nuFairview.png" alt="NU Fairview Image">
                <img src="img/partners/xavierSchool.png" alt="Xavier School Image">
                <img src="img/partners/coaAteneo.png" alt="COA Ateneo">

            </div>
        </marquee>
    </div>





    @php
        $limit = request()->query('limit');
    @endphp

    <!-- TESTIMONIALS -->
    <div class="min-h-[500px] bg-[#016262] mt-20 mb-20 pb-10">
        <div class="ml-20 pt-20">
            <h1 class="text-5xl font-bold text-[#EBFCFC]">
                Words from our Eco Heroes
            </h1>

        <!-- Limit only the images to 3 -->
        <div class="flex items-center mt-10">
            @foreach ($testimonials->sortByDesc('created_at')->take(3) as $testimonial)
                <img src="{{ Storage::url($testimonial->image) }}" alt="Testimonial Image"
                    class="border-4 rounded-full w-[70px] h-[70px] border-[#17B67D] border-solid ml-[-15px]">
            @endforeach
            <p class="ml-10 text-xl text-[#EBFCFC] lg:w-120 lg:block hidden">
                Latest testimonials.
            </p>
            <p class="text-[#EBFCFC] lg:w-120 mt-10 block md:hidden text-xl">
                Latest testimonials
             </p>
        </div>



        <div class="mt-10 flex flex-wrap justify-center gap-[3vw] p-3">
            @foreach ($testimonials as $testimonial)
            <div class="w-80 h-90 rounded-xl bg-[#EBFCFC] p-5">
                <img src="{{Storage::url($testimonial->image)}}" alt="Testimonial Picture" class="border-4 w-15 w-[50px] h-[50px] rounded-full border-[#17B67D]  border-solid ">
                <p class="text-[#016262] break-words mt-2 mb-5">{{ $testimonial->content }}</p>
                <p class="text-[#016262] ">{{$testimonial->name}}</p>
                <p class="text-[#016262]">{{$testimonial->company}}</p>
            </div>



            <div class="mt-10 flex flex-wrap justify-center gap-[3vw] p-3">
                @foreach ($testimonials as $testimonial)
                    <div class="w-80 h-90 rounded-xl bg-[#EBFCFC] p-5">
                        <img src="images/testimonial/{{ Storage::url($testimonial->image) }}"
                            alt="Testimonial Picture"
                            class="border-4 w-15 rounded-full border-[#17B67D]  border-solid ">
                        <div class="h-40 overflow-auto p-2 my-5">
                            <p class="text-[#016262] break-words mt-2 mb-5">{{ $testimonial->content }}</p>
                        </div>
                        <p class="text-[#016262] ">{{ $testimonial->name }}</p>
                        <p class="text-[#016262]">{{ $testimonial->company }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>



    </div>







</x-public-layout>
