@extends('layouts.admin')

@section('title', 'Harga Hotel')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Harga Hotel</h1>
                <a href="{{ route('hotel-price.create') }}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50">Tambah Harga Hotel</i>
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
                                    <th>Paket Wisata</th>
                                    <th>Hotel</th>
                                    <th>Kapasitas</th>
                                    <th>Harga Hotel</th>
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
                { data: 'tourist_package.name', name: 'tourist_package.name' },
                { data: 'hotel.name', name: 'hotel.name' },
                { data: 'capacity.person', name: 'capacity.person' },
                { data: 'price', name: 'price' },
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