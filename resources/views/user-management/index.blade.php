<x-sidebar-layout>
    <!-- Styles and Libraries -->
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

    <!-- Table Component -->
    <x-table
        title="List of User"
        addUrl="{{ route('user-management.create') }}"
        text="user"
    >
        <x-slot:thead>
            <tr>
                <th><span class="flex items-center">Id</span></th>
                <th><span class="flex items-center">Name</span></th>
                <th><span class="flex items-center">Email</span></th>
                <th><span class="flex items-center">Action</span></th>
            </tr>
        </x-slot:thead>

        @foreach ($users as $user)
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap">{{ $user->id }}</td>
                <td style="overflow-wrap:anywhere;">{{ $user->name }}</td>
                <td style="overflow-wrap:anywhere;">{{ $user->email }}</td>
                <td>
                    <div class="flex">
                        <a href="{{ route('user-management.edit', $user->id) }}" class="py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>
                        <form action="{{ route('user-management.delete', $user->id) }}" method="POST" class="delete_form">
                            @csrf
                            @method('delete')
                            <button type="submit" class="py-2 px-8 rounded-md bg-red-600 text-white">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-table>

    <!-- DataTable and SweetAlert Logic -->
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
                                text: "User has been deleted",
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
