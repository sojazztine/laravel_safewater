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
    <div class="block w-[98%] mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm mb-5  mt-[50px]">
        <div class="flex justify-between font-bold">
            <h1 class="text-lg text-[#016262]">List of Partners</h1>
            <a href="{{ route('partner-management.create') }}" class=" mr-2 bg-green-700 text-white rounded-md px-5 py-2">+ Add new partner</a>
        </div>
        <table id="search-table">
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center">
                            Id
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Company Name
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Image
                        </span>
                    </th>

                    <th>
                        <span class="flex items-center">
                            Description
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
                @foreach ($partners as $partner )
                <tr>
                    <td class="font-medium text-gray-900 whitespace-nowrap ">{{ $partner->id }}</td>
                    <td style="overflow-wrap:anywhere;"> {{ $partner->company_name }}</td>
                    <td style="overflow-wrap:anywhere;">{{ $partner->image }}</td>
                    <td style="overflow-wrap:anywhere;">{{ $partner->description }}</td>
                    <td>
                        <div class="flex">
                            <a href="{{ route('partner-management.edit', $partner->id) }}" class=" py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>
                            <form action="{{ route('partner-management.delete', $partner->id) }}" method="POST" class="delete_form">
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
                            text: "Testimonial has been deleted",
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
