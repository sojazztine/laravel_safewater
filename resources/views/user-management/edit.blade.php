<x-sidebar-layout>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="mt-[50px] ml-5">
        <div class="flex gap-5">
            <a href="{{ route('user-management.index') }}" type="button" class="text-white bg-[#016262] hover:bg-[#018266] focus:ring-4 rotate-180 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 ">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                <span class="sr-only">Icon description</span>
            </a>
            <h1 class="text-[#016262] text-xl">Edit a user</h1>
        </div>


        <card class="block max-w-2xl mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm">

            <form class="max-w-xl mx-auto" method="POST" action="{{ route('user-management.update', $user->id) }}" enctype="multipart/form-data" id="user_form">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $user->name }}"  />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name*</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ $user->email }}"  />
                    <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" >Email*</label>
                </div>

                <div >
                       <h1 class="text-[#016262] text-lg font-bold">Update Password</h1>

                       <div class="relative z-0 w-full my-5 group">
                           <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                           <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" >New password</label>
                        </div>
                        <p class="text-gray-500 text-sm my-5">Ensure your account is using a long, random password to stay secure.</p>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
            </form>


        </card>
    </div>

    <script>
        // SweetAlert confirmation before submitting the form
        document.getElementById("user_form").addEventListener('submit', function(e){
            e.preventDefault(); // Prevent form from submitting immediately
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            // const password = document.getElementById('password').value;

            if(name === "" || email === ""){
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
                title: 'Do you want to update this user information?',
                text: 'You are about to update user information.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, post it',
                cancelButtonText: 'No, cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Success',
                        text: 'User was updated successfully',
                        icon: 'success',
                        confirmButtonText: 'Ok',
                    }).then(() => {
                        this.submit(); // If confirmed, submit the form
                    });
                }
            });
        });
    </script>
</x-sidebar-layout>
