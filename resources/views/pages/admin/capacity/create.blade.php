@extends('layouts.admin')

@section('title', 'Kapasitas')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Kapasitas</h1>
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
                    <form action="{{ route('capacity.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="tourist_packages_id">Paket Wisata</label>
                            <select name="tourist_packages_id" id="tourist_packages_id" class="form-control" required>
                                @foreach ($tourist_packages as $tourist_package)
                                    <option value="{{ $tourist_package->id }}">{{ $tourist_package->name }}</option>                              
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hotels_id">Hotel</label>
                            <select name="hotels_id" id="hotels_id" class="form-control" required>
                                @foreach ($hotels as $hotel)
                                    <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>                              
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="person">Jumlah Orang</label>                            
                            <input type="text" class="form-control" id="person" name="person" placeholder="Masukkan jumlah orang ..." required />
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>                            
                            <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan Harga ..." required />
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