@extends('layouts.admin')

@section('title', 'Gallery')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Foto Gallery</h1>
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
                    <form action="{{ route('tourist-gallery.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="photos">Foto Wisata</label>
                            <input type="file" class="form-control" name="photos">
                        </div>
                        <div class="form-group">
                            <label for="is_home">Set foto untuk bagian home?</label>
                            <br />
                            <label>
                                <input type="radio" name="is_home" value="1" class="form-control" style="width: 18px;">Ya
                            </label>
                            &nbsp;
                            <label>
                                <input type="radio" name="is_home" value="0" class="form-control" style="width: 18px;">Tidak
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="is_tempatWisata">Set foto untuk bagian halaman wisata?</label>
                            <br />
                            <label>
                                <input type="radio" name="is_tempat_wisata" value="1" class="form-control" style="width: 18px;">Ya
                            </label>
                            &nbsp;
                            <label>
                                <input type="radio" name="is_tempat_wisata" value="0" class="form-control" style="width: 18px;">Tidak
                            </label>
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