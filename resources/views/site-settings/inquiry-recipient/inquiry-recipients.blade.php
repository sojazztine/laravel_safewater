<x-sidebar-layout>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3/dist/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <style>
        .datatable-selector{
            display: flex !important;
            width: 70px !important;
            justify-content: space-between !important;
        }
    </style>
    <x-tab-settings-layout></x-tab-settings-layout>
    <div class="block w-[94%] mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm mt-5">
        @if(session('success'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 " role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8  " data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    <div class="flex justify-between">
        <h1 class="text-lg font-bold text-[#016262]">Recipient List</h1>
        <a href="{{ route('inquiry-recipients.create')}}" class=" mr-2 bg-green-700 text-white rounded-md px-5 py-2">+ Add Recipient</a>
    </div>
        <table id="search-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center">
                            Recipients
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Action
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recipients as $recipient )
                <tr>
                    <td style="overflow-wrap:anywhere;">{{$recipient}}</td>
                    <td>
                        <div class="flex">
                            <form action="{{ route('inquiry-recipients.delete', $recipient) }}" method="POST" class="delete_form">
                                @csrf
                                @method('delete')
                                <button class="py-2 px-8 rounded-md bg-red-600 text-white">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>


    <script>
        if (document.querySelectorAll("search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
            const dataTable = new simpleDatatables.DataTable("#search-table", {
                searchable: true,
                sortable: false
            });
        }

            // Select all forms with the 'delete_form' class
        document.querySelectorAll(".delete_form").forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent form from submitting immediately

                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: "Delete",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, Delete it",
                    cancelButtonText: "No"
                }).then((result) => {
                    if (result.isConfirmed) {  // Check if 'Yes' was clicked
                        Swal.fire({
                            title: "Deleted",
                            text: "Recipient has been deleted",
                            icon: "success"
                        }).then(() => {
                            this.submit();  // Submit the form to delete the post after the success alert
                        });
                    }
                });
            });
        });


    </script>




</x-sidebar-layout>
