<x-public-layout>
    <div class="flex justify-between mt-5 md:w-[80%] w-[60%] mx-auto items-center md:pt-20  ">

        <div class="col ">
            <h1 class="text-[#016262] font-bold text-5xl ">SAVING THE  WORLD</h1>
            <h3 class="text-[#016262]  text-xl ">one plastic sachet at a time.</h3>

            <div class="flex w-20 justify-between pl-2 mt-6">
                <a href="{{ route('login')}}" class="bg-[#016262] rounded-full px-8 py-1 text-xl mr-5 text-white  hover:text-[#016262] hover:bg-[#f9fff5] hover:border-[#016262] border transition delay-30 duration-300 ease-in-out">Login</a>
                <a href="{{ route('register')}}" class="bg-[#51A5BE] rounded-full px-8 py-1 text-xl text-white hover:text-[#51A5BE] hover:bg-[#f9fff5] hover:border-[#51A5BE] border transition delay-30 duration-300 ease-in-out">Register</a>
            </div>
        </div>

        <div class="col">
            <div class="flex gap-[1vw] ">
                <div class="rounded-tl-4xl">
                    <img src="img/bulb.png" alt="restore-picture" width="300" class="rounded-tl-[150px] rounded-bl-3xl md:w-100 hidden lg:block  ">
                </div>
                <div class="rounded-tr-4xl">
                    <img src="img/bulb.png" alt="restore-picture" width="300" class="rounded-tr-[150px] rounded-br-3xl md:w-100 hidden lg:block ">
                </div>
            </div>
        </div>
        <!-- SMALL SCREEN TO MEDIUM SCREEN -->
    </div>
    <div class="lg:hidden flex gap-[1vw] w-[80%] mx-auto mt-20">
        <div class="rounded-tl-4xl">
                        <img src="img/bulb.png" alt="restore-picture"   class="rounded-tl-[80px] md:rounded-tl-[150px] rounded-bl-3xl w-400   ">
            </div>
            <div class="rounded-tr-4xl">
                        <img src="img/bulb.png" alt="restore-picture"   class="rounded-tr-[80px] md:rounded-tr-[150px] rounded-br-3xl w-400  ">
            </div>
    </div>

    <div class="mt-[200px]">
        <div class="flex justify-center mb-[10px]">
            <h1 class="text-bolder text-2xl text-[#016262]">
                Our partners
            </h1>
        </div>
    <marquee width="100%" direction="right" scrollamount="12" >
            <div class="flex items-center flex-wrap justify-center md:gap-[3vw] overflow-hidden  ">
                <img src="img/partners/scholasticas.png" alt="Scholasticas Image" >
                <img src="img/partners/pccr.png" alt="PCCR Image" >
                <img src="img/partners/studentCounsil.png" alt="Student Counsil Image" >
                <img src="img/partners/nuFairview.png" alt="NU Fairview Image" >
                <img src="img/partners/xavierSchool.png" alt="Xavier School Image" >
                <img src="img/partners/coaAteneo.png" alt="COA Ateneo" >

            </div>
    </marquee>

    </div>

    <div class="flex justify-between items-center mt-40 w-[92%] mx-auto">
        <div>
            <h1 class="text-4xl text-[#016262] mb-8 font-bold lg:w-100">Be part of the change you want to see in our environment!</h1>
            <p class="text-[#016262] text-2xl lg:w-[600px] leading-8 font-medium">Since the pollution problem is everybody’s problem, We believe that our goal of solving the problem of plastic pollution will be a lot easier to achieve through a collective effort.</p>
            <p class="mt-5 mb-20 text-[#016262] text-2xl lg:w-145 leading-8 font-medium">We are stronger when we are together.</p>

            <a href="" class=" text-white bg-[#016262] py-3 px-12 rounded-full text-xl hover:border-[#016262] hover:text-[#016262] hover:bg-[#f9fff5] border border-transparent transition delay-30 duration-300 ease-in-out  ">Work with us!</a>
        </div>
        <div class="hidden lg:block">
            <img src="img/img-index/presenting.png" alt="Presenting Image">
        </div>
    </div>

    <div class="flex lg:flex-row flex-col justify-center items-center gap-[3vw] mt-40">
        <div class="flex flex-col items-center lg:border-t-2 border-[#016262] ">
            <img src="img/img-index/throwAway.png" alt="Trash Icon" class="md:mt-11">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Analog Collection
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8">
                Reducing plastic waste the old-fashioned way
            </p>
            <img src="img/img-index/pieceCount.png" alt="Piece Count Image" class="hidden lg:block max-w-full h-auto">
        </div>
        <div class="flex flex-col items-center lg:border-t-2 border-[#016262]">
            <img src="img/img-index/earthCare.png" alt="Earth Care Icon" class="md:mt-10">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                 Digital Collections
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8 ">
                Plastic segregation, but a lot smarter and a lot more fun!
            </p>
            <img src="img/img-index/smartEcoBin.png" alt="Smart Eco Bin Image"  class="hidden lg:block max-w-full h-auto">
        </div>
        <div class="flex flex-col items-center  lg:border-t-2 border-[#016262]">
            <img src="img/img-index/forest.png" alt="Forest Icon" class="lg:mt-5">
            <h1 class="text-[#016262] text-3xl font-bold mt-10">
                Fabrication
            </h1>
            <p class="text-[#016262] text-medium font-medium mb-8 lg:w-[400px]">
            Breathing new life into plastic waste with logical pragmatism and boundless creativity
            </p>
            <img src="img/img-index/circularEconomy.png" alt="Circular Economy Image"  class="hidden lg:block max-w-full h-auto">
        </div>
    </div>

    <div class="flex w-[90%] mx-auto  justify-between mt-60">
        <div>
            <h1 class="text-[#016262] text-4xl font-bold lg:w-[470px] leading-14 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit
            </h1>
            <p class="text-[#016262] text-xl font-medium mb-10 lg:w-[580px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="flex flex-col md:flex-row w-[90%] gap-[7vw]  justify-between">
                <div>
                    <img src="img/img-index/worldWideDelivery.png"  alt="">
                    <h5 class="text-[#016262] font-bold text-lg my-5">Lorem Ipsum</h5>
                    <p class="w-80 text-[#016262] text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="mt-10 md:mt-0">
                    <img src="img/img-index/landscape.png" alt="">
                    <h5 class="text-[#016262] font-bold text-lg my-5">Lorem Ipsum</h5>
                    <p class="w-80 text-[#016262] text-lg ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="flex justify-center items-center mt-16 mb-10">
                <a href="" class="bg-[#51A5BE] text-white py-3 px-12 rounded-full text-xl font-bold hover:bg-[#f9fff5] hover:text-[#51A5BE]  hover:border-[#51A5BE] border transition delay-30 duration-300 ease-in-out">Lorem</a>
            </div>
        </div>
        <div class="mb-15">
            <img src="img/bulb.png" width="400" alt="" class="rounded-tr-[300px] rounded-tl-lg rounded-b-lg hidden lg:block">
        </div>
    </div>

        <!-- TESTIMONIALS -->
        <div class=" min-h-[500px] bg-[#016262] mt-20 ">
            <div class="ml-20 pt-20">
                <h1 class="text-5xl text-bold text-[#EBFCFC]">
                        Testimonials
                </h1>
                <div class="flex items-center mt-10">
                    <img src="../img/testimonial/robby.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D]  border-solid ">
                    <img src="../img/testimonial/hansley.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D] ml-[-20px] border-solid ">
                    <img src="../img/testimonial/marcus.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D] ml-[-20px] border-solid ">
                    <p class="ml-10 text-[#EBFCFC] lg:w-120 lg:block hidden ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunta.
                    </p>
                </div>
                <p class=" text-[#EBFCFC] lg:w-120 mt-10 block md:hidden">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunta.
                </p>
            </div>
            <div class="mt-10 flex justify-center flex-wrap gap-[3vw] p-3">
                <div class="w-80 h-90 rounded-xl bg-[#EBFCFC] p-5">

                        <img src="img/testimonial/robby.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D]  border-solid ">
                        <p class="text-[#016262]  mt-2 mb-5">I congratulate restore for doing this, finally we have some solution that we can say really works.</p>
                        <p class="text-[#016262] ">Robby</p>
                        <p class="text-[#016262]">Xavier Environmentalist</p>

                </div>
                <div class="w-80 h-90 rounded-xl bg-[#EBFCFC] p-5">
                    <img src="img/testimonial/hansley.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D]  border-solid ">
                    <p class="text-[#016262] mt-2 mb-5">We have particularly seen how restore solutions philippines takes advantage of these advancements in technologies in order to produce materials that are environmentally friendly and that could also help communities in need.</p>
                    <p class="text-[#016262]">Hansley Saw</p>
                    <p class="text-[#016262]">XS Robotixs Club Member</p>
                </div>
                <div class="w-80 h-90 rounded-xl bg-[#EBFCFC] p-5">
                    <img src="img/testimonial/marcus.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D]  border-solid ">
                    <p class="text-[#016262] mt-2 mb-5">People can now understand that “oh yeah, recyclability can be used in many different ways aside from just refilling another water bottle”. They can use it as furniture, they can use it as chairs, they can use it as tables.</p>
                    <p class="text-[#016262]">Marcus</p>
                    <p class="text-[#016262]">XS Team Green Advocate</p>
                </div>
                <div class="w-80 h-90 rounded-xl bg-[#EBFCFC] p-5 ">

                <img src="img/testimonial/robby.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D]  border-solid ">
                <p class="text-[#016262]  mt-2 mb-5">I congratulate restore for doing this, finally we have some solution that we can say really works.</p>
                <p class="text-[#016262] ">Robby</p>
                <p class="text-[#016262]">Xavier Environmentalist</p>

                </div>
                <div class="w-80 h-90 rounded-xl bg-[#EBFCFC] p-5">
                    <img src="img/testimonial/hansley.png" alt="" class="border-4 w-15 rounded-full border-[#17B67D]  border-solid ">
                    <p class="text-[#016262] mt-2 mb-5">We have particularly seen how restore solutions philippines takes advantage of these advancements in technologies in order to produce materials that are environmentally friendly and that could also help communities in need.</p>
                    <p class="text-[#016262]">Hansley Saw</p>
                    <p class="text-[#016262]">XS Robotixs Club Member</p>
                </div>
            </div>
        </div>

        <div class="w-[90%] mx-auto">
            <div class="mt-20 ml-20">
                <h1 class="text-[#016262] text-5xl font-bold mb-3">Visit our SEB Mall Locations</h1>
                <p class="text-[#016262] text-xl font-medium mb-30">Visit our SEB Mall Locations Near You!</p>
            </div>

            <div class="flex items-center justify-center gap-[6vw] mb-10 mt-40 flex-wrap lg:flex-row flex-col">

                <div>
                    <img src="img/mall/up.png" alt="" class="object-cover w-70 h-30">
                    <h5 class="text-lg text-[#016262] font-bold">Uptown Mall</h5>
                    <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p>
                </div>
                <div>
                    <img src="img/mall/new.png" alt="" class="object-cover w-50 h-30">
                    <h5 class="text-lg text-[#016262] font-bold">Newport Mall</h5>
                    <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p>
                </div>
                <div>
                    <img src="img/mall/east.png" alt="" class=" object-cover w-50 h-30">
                    <h5 class="text-lg text-[#016262] font-bold">Eastwood Mall</h5>
                    <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p>
                </div>
                <div>
                    <img src="img/mall/chinaTown.png" alt="" class="object-cover w-70 h-30">
                    <h5 class="text-lg text-[#016262] font-bold">Lucky Chinatown Mall</h5>
                    <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p>
                </div>
                <div>
                    <img src="img/mall/grandCanal.png" alt="" class="object-cover w-50 h-30">
                    <h5 class="text-lg text-[#016262] font-bold w-60">Venice Grand Canal Mall</h5>
                    <p class="w-48 text-md text-[#016262] text-start mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error aliquid ipsa nulla corporis sequi maiores architecto culpa facilis earum impedit veritatis labore minus, deleniti amet non voluptatem alias possimus tenetur.</p>
                </div>
            </div>
        </div>


        <div class="flex items-center justify-center">
            <div class="hidden md:block">
                <img src="img/img-index/restoreMachine.png" alt="">
            </div>
            <div class="mb-10">
                <h1 class="md:text-6xl text-2xl font-bold text-[#016262] mb-10">Smart EcoBin</h1>
                <p class="md:text-4xl text-lg mb-6 md:leading-10 text-[#016262] font-normal">Anybody can be a hero. <br> Help lead the charge towards a cleaner <br> and greener future!</p>
                <p class="md:text-4xl text-lg mb-6 md:leading-10 text-[#016262] font-normal">Every piece of plastic counts!</p>
                <p class="md:text-4xl text-lg mb-20 md:leading-10 text-[#016262] font-normal ">Sign-up for your Smart E-Collection Bin <br> account now and help make a difference!</p>
                <div class="flex gap-[1vw] flex-col md:flex-row">
                    <a href="" class="bg-[#016262] rounded-full   md:px-10 py-2 px-4 text-center text-white border hover:text-[#016262] hover:border-[#016262] hover:bg-[#f9fff5] transition delay-30 duration-300 ease-in-out">Join us</a>
                    <a href="" class="bg-[#51A5BE] rounded-full   md:px-10 py-2 px-4 text-center text-white border hover:text-[#51A5BE] hover:border-[#51A5BE] hover:bg-[#f9fff5] transition delay-30 duration-300 ease-in-out">View my account</a>
                </div>
            </div>
        </div>
</x-public-layout>

