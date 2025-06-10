<x-sidebar-layout>
    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3/dist/style.css" rel="stylesheet">
    <style>
        .datatable-selector {
            display: flex !important;
            width: 70px !important;
            justify-content: space-between !important;
        }
    </style>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Table --}}
    <x-table
        title="List of Testimonials"
        addUrl="{{ route('testimonials.create') }}"
        text="testimonial"
    >
        <x-slot:thead>
            <tr>
                <th><span class="flex items-center">Id</span></th>
                <th><span class="flex items-center">Name</span></th>
                <th><span class="flex items-center">Company</span></th>
                <th><span class="flex items-center">Content</span></th>
                <th><span class="flex items-center">Date</span></th>
                <th><span class="flex items-center">Action</span></th>
            </tr>
        </x-slot:thead>

        <tbody id="search-table">
            @foreach ($testimonials as $testimonial)
                <tr>
                    <td class="font-medium text-gray-900 whitespace-nowrap">{{ $testimonial->id }}</td>
                    <td style="overflow-wrap:anywhere;">{{ $testimonial->name }}</td>
                    <td style="overflow-wrap:anywhere;">{{ $testimonial->company }}</td>
                    <td style="overflow-wrap:anywhere;">{{ $testimonial->content }}</td>
                    <td>{{ $testimonial->created_at }}</td>
                    <td>
                        <div class="flex">
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>
                            <form action="{{ route('testimonials.delete', $testimonial->id) }}" method="POST" class="delete_form">
                                @csrf
                                @method('delete')
                                <button class="py-2 px-8 rounded-md bg-red-600 text-white">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-table>

    {{-- DataTables + SweetAlert --}}
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
                            this.submit();
                        }
                    });
                });
            });
        });
    </script>
</x-sidebar-layout>
