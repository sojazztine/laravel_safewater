<x-sidebar-layout>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3/dist/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .datatable-selector {
            display: flex !important;
            width: 70px !important;
            justify-content: space-between !important;
        }
    </style>

    <x-table
        title="List of Partners"
        addUrl="{{ route('partner-management.create') }}"
        text="partner"
    >
        <x-slot:thead>
            <tr>
                <th><span class="flex items-center">Id</span></th>
                <th><span class="flex items-center">Company Name</span></th>
                <th><span class="flex items-center">Image</span></th>
                <th><span class="flex items-center">Description</span></th>
                <th><span class="flex items-center">Status</span></th>
                <th><span class="flex items-center">Action</span></th>
            </tr>
        </x-slot:thead>

        @foreach ($partners as $partner)
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap">{{ $partner->id }}</td>
                <td style="overflow-wrap:anywhere;">{{ $partner->company_name }}</td>
                <td style="overflow-wrap:anywhere;">{{ $partner->image }}</td>
                <td style="overflow-wrap:anywhere;">{{ $partner->description }}</td>
                <td style="overflow-wrap:anywhere;">{{ $partner->is_active ? 'Active' : 'Inactive' }}</td>
                <td>
                    <div class="flex">
                        <a href="{{ route('partner-management.edit', $partner->id) }}" class="py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>
                        <form action="{{ route('partner-management.delete', $partner->id) }}" method="POST" class="delete_form">
                            @csrf
                            @method('delete')
                            <button class="py-2 px-8 rounded-md bg-red-600 text-white">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-table>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const table = document.querySelector("#search-table");
            if (table && typeof simpleDatatables !== 'undefined') {
                new simpleDatatables.DataTable(table, {
                    searchable: true,
                    sortable: false
                });
            }

            document.querySelectorAll(".delete_form").forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault();

                    Swal.fire({
                        title: "Delete",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, Delete it",
                        cancelButtonText: "No"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: "Deleted",
                                text: "Partner has been deleted",
                                icon: "success"
                            }).then(() => {
                                this.submit();
                            });
                        }
                    });
                });
            });
        });
    </script>

</x-sidebar-layout>
