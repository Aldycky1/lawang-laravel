@extends('layouts.admin')

@section('title', 'Ketentuan Paket')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Ketentuan Paket</h1>
                <a href="{{ route('regulation.create') }}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50">Tambah Ketentuan Paket</i>
                </a>
            </div>

            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="crudTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Wisata</th>
                                    <th>Ketentuan Paket</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
@endsection

@push('after-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'tourist_attraction.name', name: 'tourist_attraction.name' },
                { data: 'description', description: 'name' },
                { 
                    data: 'action', 
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%',
                },
            ]
        })
    </script>
@endpush