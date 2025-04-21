<x-sidebar-layout>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="mt-[50px] ml-5">
        <div class="flex gap-5">
            <a href="{{ route('partner-management.index') }}" type="button" class="text-white bg-[#016262] hover:bg-[#018266] focus:ring-4 rotate-180 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 ">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                <span class="sr-only">Icon description</span>
            </a>
            <h1 class="text-[#016262] text-xl">Edit partner</h1>
        </div>


        <card class="block max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm ">

            <form class="max-w-md mx-auto" method="POST" action="{{ route('partner-management.update', $data->id) }}" enctype="multipart/form-data" id="user_form">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="company_name" id="company_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $data->company_name }}" />
                    <label for="company_name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company Name*</label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Upload Image*</label>
                    <img src="{{ asset('img/default-image.jpg') }}" alt="" width=300 class="my-5" id="preview">
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " aria-describedby="file_input_help" id="image" name="image" type="file" >
                    {{-- <p class="mt-1 text-sm text-gray-500 " id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p> --}}
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="description" id="description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $data->description }}"  />
                    <label for="description" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description*</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="is_active" class="block mb-2 text-sm font-medium text-gray-900 ">Status</label>
                    <select id="is_active" name="is_active" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
            </form>


        </card>
    </div>

    <script>
        // SweetAlert confirmation before submitting the form
        document.getElementById("user_form").addEventListener('submit', function(e){
            e.preventDefault(); // Prevent form from submitting immediately
            const company_name = document.getElementById('company_name').value;
            const image = document.getElementById('image').value;
            const description = document.getElementById('description').value;

            if(company_name === "" || image === ""|| description === ""){
                Swal.fire({
                    title: 'Please fill in the content!',
                    text: 'The content field cannot be empty.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            // Show SweetAlert2 confirmation dialog
            Swal.fire({
                title: 'Do you want to add this user?',
                text: 'You are about to add a new user.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, post it',
                cancelButtonText: 'No, cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Success',
                        text: 'User was added successfully',
                        icon: 'success',
                        confirmButtonText: 'Ok',
                    }).then(() => {
                        this.submit(); // If confirmed, submit the form
                    });
                }
            });
        });

        document.getElementById("image").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("preview").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
            });
    </script>
</x-sidebar-layout>
