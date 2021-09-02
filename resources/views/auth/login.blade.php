@extends('layouts.auth')

@section('title', 'Login')

@section('header', 'Masuk ke akun Anda')

@section('content')
    <div class="card p-5 login">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="font-weight-bold">{{ __('Email') }}</label>
                <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    id="email"
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
                    class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                    id="password"
                    placeholder="Masukkan password"
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-block btn-utama mt-5">
                Login
            </button>
            <p class="text-center mt-4">
                Belum memiliki akun? <a href="{{ route('register') }}">Daftar Akun</a>
            </p>
        </form>
    </div>
@endsection
