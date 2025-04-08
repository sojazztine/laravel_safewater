<x-sidebar-layout>
    <!-- Include the required CSS for the DataTable -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3/dist/style.css" rel="stylesheet">

    <!-- Include the SweetAlert2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Include the Simple DataTable JS -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <style>
        .datatable-selector{
            display: flex !important;
            width: 70px !important;
            justify-content: space-between !important;
        }
    </style>

    <div class="">
        <div class="flex justify-end mb-4">
            <a href="{{ route('landingPage.create')}}" class="mr-10 bg-green-700 text-white rounded-md px-5 py-2">+ Add new image</a>
        </div>

        <table id="search-table" class="table-auto w-full border-collapse">
            <thead>

                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Image</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example static row -->
                @foreach ($landingPages as $landingPage)
                   <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap ">{{ $landingPage->id }}</td>
                        <td style="overflow-wrap:anywhere;">{{$landingPage->title}}</td>
                        <td style="overflow-wrap:anywhere;">{{$landingPage->image}}</td>
                        <td style="overflow-wrap:anywhere;">{{$landingPage->description}}</td>
                        <td>
                            <div class="flex">
                                <!-- Delete Form with Confirmation -->
                                <form action="{{ route('landingPage.delete', $landingPage->id) }}" method="POST" class="delete_form">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="py-2 px-8 rounded-md bg-red-600 text-white">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Initialize DataTable if the element with the id search-table exists
        if (document.querySelector("#search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
            const dataTable = new simpleDatatables.DataTable("#search-table", {
                searchable: true,
                sortable: true // Enable sorting by default (you can set it per column if needed)
            });
        }

        // Handling the delete form with SweetAlert confirmation
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
                            text: "The item has been deleted",
                            icon: "success"
                        }).then(() => {
                            this.submit();  // Submit the form to delete the item after the success alert
                        });
                    }
                });
            });
        });
    </script>
</x-sidebar-layout>
