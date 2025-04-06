<x-sidebar-layout>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="flex gap-5">
        <a href="{{ route('landingPage.index') }}" type="button" class="text-white bg-[#016262] hover:bg-[#018266] focus:ring-4 rotate-180 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 ">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            <span class="sr-only">Icon description</span>
        </a>
        <h1 class="text-[#016262] text-xl">Add new hero image</h1>
    </div>
    <card class="block max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm ">
        <form class="max-w-md mx-auto" method="POST" action="{{ route('landingPage.store') }}" enctype="multipart/form-data" id="testimonial_form">
            @csrf
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" required placeholder=" "  />
                <label for="title" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
            </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Upload Image</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " aria-describedby="file_input_help" id="image" name="image" type="file" >
            <p class="mt-1 text-sm text-gray-500 " id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="description" id="description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" required placeholder=" "  />
                <label for="description" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
        </form>

        <script>
            // SweetAlert confirmation before submitting the form
            document.getElementById("testimonial_form").addEventListener('submit', function(e){
                e.preventDefault(); // Prevent form from submitting immediately

                const image = document.getElementById('image').value;
                const title = document.getElementById('title').value;
                const description = document.getElementById('description').value;


                if(image === "" || title === "" || description === ""){
                    Swal.fire({
                        title: 'Please insert a image!',
                        text: 'The image field cannot be empty.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                // Show SweetAlert2 confirmation dialog
                Swal.fire({
                    title: 'Do you want to post this?',
                    text: 'You are about to post this.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, post it',
                    cancelButtonText: 'No, cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Testimonial was added successfully',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                        }).then(() => {
                            this.submit(); // If confirmed, submit the form
                        });
                    }
                });
            });
        </script>

    </card>
</x-sidebar-layout>
