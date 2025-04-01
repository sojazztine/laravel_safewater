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
        <a href="{{ route('testimonials.create')}}" class=" mr-10 bg-green-700 text-white rounded-md px-5 py-2">+ Add new testimonial</a>
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
                        Name
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Company
                    </span>
                </th>
                <th class="">
                    <span class="flex items-center">
                        Content
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Date
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
            @foreach ($testimonials as $testimonial )
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap ">{{ $testimonial-> id}}</td>
                <td style="overflow-wrap:anywhere;">{{ $testimonial-> name }}</td>
                <td style="overflow-wrap:anywhere;">{{ $testimonial-> company }}</td>
                <td style="overflow-wrap:anywhere;">{{ $testimonial-> content }}</td>
                <td>{{ $testimonial-> created_at}}</td>
                <td>
                    <div class="flex">
                        <a href=" {{ route('testimonials.edit', $testimonial->id)}}" class=" py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a>
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
