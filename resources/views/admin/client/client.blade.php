@extends('admin.components.maindas')
@section('dascontainer')
<div class="main-content flex flex-col flex-grow p-4">
    <div class="flex justify-between">
        <h1 class="font-bold text-2xl text-gray-700">Data Nasabah</h1>
        <a href="{{ url("/admin/client/add") }}" class="px-3 py-2 rounded-md bg-blue-500 hover:bg-blue-700 text-white">Create</a>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    <div class="flex flex-col flex-grow bg-white rounded mt-4">
        <div class="px-10 pt-10">
            <div class="container mx-auto">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="p-4">
                            <!-- <table> -->
                            <table id="dataTable" class="p-4">
                                <thead class="bg-gray-50 text-left">
                                    <tr>
                                        <th class="p-8 text-lg text-gray-500">
                                            ID
                                        </th>
                                        <th class="p-8 text-lg text-gray-500">
                                            Name
                                        </th>
                                        <th class="p-8 text-lg text-gray-500">
                                            Nomor Rekening
                                        </th>
                                        <th class="p-8 text-lg text-gray-500">
                                            Tanggal Lahir
                                        </th>
                                        <th class="p-8 text-lg text-gray-500">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('clients.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'nom_rek', name: 'nom_rek'},
            {data: 'dob', name: 'dob'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
  </script>
@endsection