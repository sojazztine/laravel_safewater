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
<div class="">
    <div class="flex justify-end">
        {{-- <a href="" class=" mr-10 bg-green-700 text-white rounded-md px-5 py-2">+ Add new post</a> --}}
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
                        Title
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Descrpition
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
            @foreach ($hero_headings as $hero_heading)
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$hero_heading->id}}</td>
                <td style="overflow-wrap:anywhere;">{{$hero_heading->title}}</td>
                <td style="overflow-wrap:anywhere;">{{$hero_heading->description}}</td>

                <td>
                    <div class="flex">
                        <a href="{{route('heroHeading.edit', $hero_heading->id)}}" class=" py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>

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
                            text: "Post has been deleted",
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
