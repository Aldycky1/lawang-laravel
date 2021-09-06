@extends('layouts.admin')

@section('title', 'Tiket')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Harga Tiket</h1>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <div class="card-shadow">
                <div class="card-body">
                    <form action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tourist_attractions_id">Nama Wisata</label>
                            <select name="tourist_attractions_id" id="tourist_attractions_id" class="form-control" required>
                                @foreach ($tourist_attractions as $tourist_attraction)
                                    <option value="{{ $tourist_attraction->id }}">{{ $tourist_attraction->name }}</option>                              
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Jenis Tiket</label>
                            <input type="text" class="form-control" name="name" placeholder="Jenis Tiket ..." required />
                        </div>
                        <div class="form-group">
                            <label for="price">Harga Tiket</label>
                            <input type="number" class="form-control" name="price" placeholder="Harga Tiket ..." required />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
@endsection