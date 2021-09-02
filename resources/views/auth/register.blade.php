@extends('layouts.auth')

@section('title', 'Register')

@section('header', 'Mendaftarkan akun')

@section('content')
    <div class="card p-5 login">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h5 class="mb-4">
                Lengkapi informasi di bawah ini untuk mendaftarkan akun Anda
            </h5>
            <div class="form-group">
                <label for="name" class="font-weight-bold">{{ __('Nama') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Masukkan nama" required autocomplete="name" autofocus />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="font-weight-bold">{{ __('Email') }}</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                    placeholder="Masukkan email"
                    aria-describedby="emailHelp"
                    
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="font-weight-bold">{{ __('Password') }}</label>
                <input
                    type="password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                    id="password"
                    placeholder="Masukkan password"
                />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm" class="font-weight-bold">{{ __('Konfirmasi Password') }}</label>
                <input
                    type="password"
                    class="form-control" name="password_confirmation" required autocomplete="new-password"
                    id="password-confirm"
                    placeholder="Masukkan konfirmasi password"
                />
            </div>
            <div class="form-group">
                <label for="phone_number" class="font-weight-bold" 
                    >{{ __('Nomor Telepon') }}</label
                >
                <input
                    type="text"
                    class="form-control"
                    id="phone_number"
                    name="phone_number"
                    placeholder="Masukkan nomor telepon"
                    value="{{ old('phone_number') }}"
                />
            </div>
            
            <div class="form-group">
                <label for="gender" class="font-weight-bold"
                    >{{ __('Jenis kelamin') }}</label
                >
                <select name="gender" id="gender" class="form-control">
                    <option selected value="Laki-Laki">{{ __('Laki-laki') }}</option>
                    <option value="Perempuan">{{ __('Perempuan') }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_of_birth" class="font-weight-bold"
                    >{{ __('Tanggal lahir') }}</label
                >
                <input
                    type="date"
                    class="form-control"
                    id="date_of_birth"
                    name="date_of_birth"
                    placeholder="Masukkan tanggal lahir"
                    value="{{ old('date_of_birth') }}"
                />
            </div>
            <button type="submit" class="btn btn-block btn-utama mt-5">
                {{ __('Daftar') }}
            </button>
        </form>
    </div>
@endsection
