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

    <x-table
        title="List of Inquiries"


    >
        <x-slot:thead>
              <tr>
                    <th>
                        <span class="flex items-center">
                            Id
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            First Name
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Last Name
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Company Name
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Email
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Message
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
        </x-slot:thead>

         @foreach ($inquiries as $inquiry )
                <tr>
                    <td class="font-medium text-gray-900 whitespace-nowrap ">{{$inquiry->id}}</td>
                    <td style="overflow-wrap:anywhere;">{{{$inquiry->first_name}}}</td>
                    <td style="overflow-wrap:anywhere;">{{$inquiry->last_name}}</td>
                    <td style="overflow-wrap:anywhere;">{{$inquiry->company_name}}</td>
                    <td style="overflow-wrap:anywhere;">{{$inquiry->email}}</td>
                    <td class="w-96">
                        <div class="max-h-[100px] overflow-y-auto break-words">
                            {{$inquiry->message}}
                        </div>
                    </td>
                    <td>{{$inquiry->created_at->format('F d, Y') }}</td>

                    <td>
                        <div class="flex">
                            {{-- <a href="" class=" py-2 px-8 rounded-md bg-green-700 text-white mr-5">Edit</a> --}}
                            <form action="{{ route('inquiries.delete', $inquiry->id) }}" method="POST" class="delete_form">
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
                            this.submit();
                        }
                    });
                });
            });
        });
    </script>


</x-sidebar-layout>
