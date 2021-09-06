@extends('layouts.admin')

@section('title', 'Tourist Attraction')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Tempat Wisata</h1>
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
                            <input type="text" class="form-control" name="name" placeholder="Masukan Nama Wisata .." required>                            
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Wisata</label>
                            <textarea name="description" id="editor" required>{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Wisata</label>
                            <input type="text" class="form-control" name="address" placeholder="Masukan Nama Wisata .." required>                            
                        </div>                                                
                        <div class="form-group">
                            <label for="is_popular">Set wisata sebagai popular?</label>
                            <br />
                            <label>
                                <input type="radio" name="is_popular" value="1" class="form-control" style="width: 18px;">Ya
                            </label>
                            &nbsp;
                            <label>
                                <input type="radio" name="is_popular" checked value="0" class="form-control" style="width: 18px;">Tidak
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

@push('after-script')
    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>    
    <script>
            CKEDITOR.replace( 'editor' );
    </script>
@endpush