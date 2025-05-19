<x-sidebar-layout>
    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3/dist/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <style>
        .datatable-selector {
            display: flex !important;
            width: 70px !important;
            justify-content: space-between !important;
        }
    </style>

    {{-- Blog Table Component --}}
    <x-table
        title="List of Blog"
        addUrl="{{ route('posts.create') }}"
        text="post"
    >
        <x-slot:thead>
            <tr>
                <th><span class="flex items-center">Id</span></th>
                <th><span class="flex items-center">Blog Title</span></th>
                <th><span class="flex items-center">Description</span></th>
                <th><span class="flex items-center">Publisher</span></th>
                <th><span class="flex items-center">Date</span></th>
                <th><span class="flex items-center">Action</span></th>
            </tr>
        </x-slot:thead>

        @foreach ($posts as $post)
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap">{{ $post->id }}</td>
                <td style="overflow-wrap:anywhere;">{{ $post->title }}</td>
                <td class="w-96">
                    <div class="max-h-[100px] overflow-y-auto break-words">
                        {{ $post->description }}
                    </div>
                </td>
                <td style="overflow-wrap:anywhere;">{{ $post->publisher }}</td>
                <td>{{ $post->created_at->format('F d, Y') }}</td>
                <td>
                    <div class="flex">
                        <a href="{{ route('posts.edit', $post->id) }}" class="py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>
                        <form action="{{ route('posts.delete', $post->id) }}" method="POST" class="delete_form">
                            @csrf
                            @method('delete')
                            <button class="py-2 px-8 rounded-md bg-red-600 text-white">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-table>

    {{-- Scripts --}}
    <script>
        if (document.querySelector("#search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
            const dataTable = new simpleDatatables.DataTable("#search-table", {
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
                            text: "Post has been deleted",
                            icon: "success"
                        }).then(() => {
                            this.submit();
                        });
                    }
                });
            });
        });
    </script>
</x-sidebar-layout>
