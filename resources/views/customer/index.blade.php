@extends('layouts.dashboard')

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
@endpush

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome {{ auth()->user()->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            <div class="col-md-3 col-lg-2">
                {{-- <button type="button" href="/mdlcustom" class="btn btn-sm btn-success">Tambah</button> --}}
                {{-- <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalcustom">
                    Create
                </button> --}}
                <a class="btn btn-sm btn-success" onClick="add()" href="javascript:void(0)"> Create </a>
            </div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
    <div class="my-3 alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif

    <div class="table-responsive">
        <table id="Table" class=" table table-stripped " class="text-center" style="width:100%">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Code </th>
                    <th> Nama Customer </th>
                    <th> City </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody class="align-middle">      
            </tbody>
        </table>
    </div>

    @include('customer.create')
   
@endsection

@push('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

    <script>
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

                $('#Table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('customer') }}",
                columns: [
                { data: 'id', name: 'id' },
                { data: 'code', name: 'code' },
                { data: 'customer', name: 'customer' },
                { data: 'city', name: 'city' },
                {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'desc']]
            });
        });

        function add(){
            $('#CompanyForm').trigger("reset");
            $('#CompanyModal').html("Add Data Customer");
            $('#company-modal').modal('show');
            $('#id').val('');
        } 

        function editFunc(id){
            $.ajax({
                type:"POST",
                url: "{{ url('edit-company') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    $('#CompanyModal').html("Edit Data Customer");
                    $('#company-modal').modal('show');
                    $('#id').val(res.id);
                    $('#code').val(res.code);
                    $('#date').val(res.date);
                    $('#customer').val(res.customer);
                    // $('#city').val(res.city);
                }
            });
        } 

        function deleteFunc(id){
            if (confirm("Delete Record?") == true) {
            var id = id;
            
            $.ajax({
                type:"POST",
                url: "{{ url('delete-company') }}",
                data: { id: id },
                dataType: 'json',
                    success: function(res){
                        var oTable = $('#Table').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        }

        $('#CompanyForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type:'POST',
                url: "{{ url('store-company')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#company-modal").modal('hide');
                    var oTable = $('#Table').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save"). attr("disabled", false);
                },
                error: function(data){
                    console.log(data);
                }
            });
        });

        // var toastTrigger = document.getElementById('liveToastBtn')
        // var toastLiveExample = document.getElementById('liveToast')
        // if (toastTrigger) {
        //     toastTrigger.addEventListener('click', function() {
        //         var toast = new bootstrap.Toast(toastLiveExample)

        //         toast.show()
        //     })
        // }

    </script> 
@endpush