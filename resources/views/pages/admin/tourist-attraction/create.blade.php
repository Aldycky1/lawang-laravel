@extends('layouts.admin')

@section('title', 'Tourist Attraction')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Paket Wisata</h1>
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
                    <form action="{{ route('tourist-attraction.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Wisata</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan Nama Wisata ..">                            
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Wisata</label>
                            <textarea name="description" rows="10" class="d-block w-100 form-control">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Wisata</label>
                            <input type="text" class="form-control" name="address" placeholder="Masukan Nama Wisata ..">                            
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