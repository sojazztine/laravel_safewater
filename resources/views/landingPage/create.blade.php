<x-sidebar-layout>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1 class="text-[#016262] text-xl">Post a new Image</h1>
    <card class="block max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <form class="max-w-md mx-auto" method="POST" action="{{ route('landingPage.store') }}" enctype="multipart/form-data" id="testimonial_form">
            @csrf
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Image</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="image" name="image" type="file" >
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

        <script>
            // SweetAlert confirmation before submitting the form
            document.getElementById("testimonial_form").addEventListener('submit', function(e){
                e.preventDefault(); // Prevent form from submitting immediately

                const image = document.getElementById('image').value;

                if(image === ""){
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
