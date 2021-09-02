@extends('layouts.admin')

@section('title', 'User')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
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
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama User</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan Nama User .." required>                            
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukan Email User .." required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukan Password User .." required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">No. HP</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Masukan Nomor HP ..">
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select name="gender" id="gender" class="form-control">
                                <option selected value="Laki-Laki">{{ __('Laki-laki') }}</option>
                                <option value="Perempuan">{{ __('Perempuan') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo User</label>
                            <input type="file" class="form-control" name="photo">
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="date_of_birth">                            
                        </div>                                                 
                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <select name="roles" id="roles" class="form-control">
                                <option value="ADMIN">{{ __('Admin') }}</option>
                                <option value="USER">{{ __('User') }}</option>
                            </select>
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
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
@endpush