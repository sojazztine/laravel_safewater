<x-sidebar-layout>
    <!-- CSS for DataTable -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3/dist/style.css" rel="stylesheet">

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <style>
        .datatable-selector {
            display: flex !important;
            width: 70px !important;
            justify-content: space-between !important;
        }
    </style>

    <x-table
        title="List of Hero image"
        addUrl="{{ route('landingPage.create') }}"
        text= "image"
    >
        <x-slot:thead">
            <tr>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </x-slot:thead>

        @foreach ($landingPages as $landingPage)
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap">{{ $landingPage->id }}</td>
                <td style="overflow-wrap:anywhere;">{{ $landingPage->title }}</td>
                <td style="overflow-wrap:anywhere;">{{ $landingPage->image }}</td>
                <td style="overflow-wrap:anywhere;">{{ $landingPage->description }}</td>
                <td>
                    <div class="flex">
                        <a href="{{ route('landingPage.edit', $landingPage->id) }}" class="py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>
                        <form action="{{ route('landingPage.delete', $landingPage->id) }}" method="POST" class="delete_form">
                            @csrf
                            @method('delete')
                            <button type="submit" class="py-2 px-8 rounded-md bg-red-600 text-white">Delete</button>
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
                            form.submit(); // Use `form` instead of `this` for clarity
                        }
                    });
                });
            });
        });
    </script>
</x-sidebar-layout>
