@extends('layouts.app')

@section('title')
    {{ $tourist_attraction->name }}
@endsection

@section('header')
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-tourist_attraction"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-tourist_attraction active">{{ $tourist_attraction->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="selamat-datang row">
                <div class="col">
                    <h1 class="text-center">{{ $tourist_attraction->name }}</h1>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- hero banner -->
        <section class="section-hero-banner">
            <div class="container">
                <div class="row hero-aneka-wisata align-tourist_attractions-start">
                    <div class="col-7">
                        <div class="aneka-wisata-pic">
                            <img
                                src="
                                    {{-- {{ asset('frontend/frontend/images/soul-puncak-lawang.jpg') }} --}}
                                    @foreach($tourist_attraction->tourist_galleries as $image)
                                        @if($image->is_tempat_wisata)
                                            {{ Storage::url($image->photos) }}                                    
                                        @endif
                                    @endforeach
                                    "
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <p class="text-justify">
                            @php
                                $text = $tourist_attraction->description
                            @endphp
                            {!! str_replace("\xc2\xa0",' ',$text) !!}
                        </p>
                    </div>
                </div>
                <div class="row alamat-aneka-wisata">
                    <div class="col">
                        <div class="alamat-wisata mt-3">
                            <img
                            src="/frontend/images/ic_loc.svg"
                            alt=""
                            class="ic-alamat-wisata"
                            />
                            <p class="align-tourist_attractions-center d-inline">
                            <span class="font-weight-bold text-info">Alamat :</span>
                            {{ $tourist_attraction->address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-paket-wisata">
            <div class="container">
                <div class="row tiket-masuk">
                    <div class="col">
                        <div class="title-tiket-masuk mb-4">
                            <h3>Tiket Masuk</h3>
                        </div>
                        <table class="table table-bordered table-custom">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="3" class="text-center">
                                        Harga Tiket Soul Puncak Lawang
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th width="20%" scope="row" class="">Jenis Tiket</th>
                                    @foreach ($tourist_attraction->ticket_prices as $ticket)
                                        <td width="40%">{{ $ticket->name }}</td>                            
                                    @endforeach
                                </tr>
                                <tr>
                                    <th scope="row" class="">Tiket Masuk</th>
                                    @foreach ($tourist_attraction->ticket_prices as $ticket)
                                        <td>Rp. {{ $ticket->price }}</td>                            
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row tiket-masuk">
                    <div class="col">
                        <div class="title-tiket-masuk mb-4">
                            <h3>Waktu Operasional</h3>
                        </div>
                        <table class="table table-bordered table-custom">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" class="text-center">
                                        Waktu Operasional
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($tourist_attraction->working_hours as $hour)
                                        <th width="50%" scope="row">{{ $hour->name }}</th>
                                        <td>{{ $hour->hours }}</td>                            
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row objek-fasilitas">
                    <div class="col objek-wisata">
                        <h3>Objek Wisata</h3>
                        <ul>
                            @foreach ($tourist_attraction->tourist_objects as $object)
                                <li>{{ $object->name }}</li>                        
                            @endforeach
                        </ul>
                    </div>
                    <div class="col fasilitas border-left border-dark">
                        <h3>Fasilitas</h3>
                        <ul>
                            @foreach ($tourist_attraction->facilities as $facility)
                                <li>{{ $facility->name }}</li>                        
                            @endforeach
                        </ul>
                    </div>
                </div>
                <h3 class="mt-5">Paket Wisata</h3>
                @foreach ($tourist_attraction->tourist_packages as $tourist_attraction_package)
                    <div class="row tiket-masuk">
                        <div class="col">
                            <div class="2-hari-1-malam">
                                <div class="title-tiket-masuk mb-3">
                                    <h5>{{ $tourist_attraction_package->name }}</h5>
                                </div>
                                <table class="table table-bordered table-custom">
                                    <thead>
                                        <tr>
                                            <th
                                                width="40%"
                                                scope="col"
                                                rowspan="2"
                                                class="align-middle text-center"
                                            >
                                                Nama Hotel
                                            </th>
                                            <th scope="col" colspan="3" class="text-center">
                                                Jumlah Peserta
                                            </th>
                                        </tr>
                                        <tr>
                                            {{-- @foreach ($tourist_attraction_package->capacities as $capacity)
                                                <th scope="col" class="text-center">{{ $capacity->person }}</th>                                                
                                            @endforeach                                         --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Hotel Benteng</th>
                                            <td>Rp. 1.064.887</td>
                                            <td>Rp. 1.134.990</td>
                                            <td>Rp. 1.204.887</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">OYO 555 Aedo</th>
                                            <td>Rp. 1.135.133</td>
                                            <td>Rp. 1.204.980</td>
                                            <td>Rp. 1.275.150</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Campago Hotel</th>
                                            <td>Rp. 1.155.795</td>
                                            <td>Rp. 1.225.750</td>
                                            <td>Rp. 1.295.795</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Grand Gallery Hotel Bukittinggi</th>
                                            <td>Rp. 1.236.759</td>
                                            <td>Rp. 1.306.750</td>
                                            <td>Rp. 1.376.759</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="/login.html">
                                    <button class="btn btn-utama float-right">
                                        Booking Paket
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </section>

        <section class="section-ketentuan-paket">
            <div class="container">
            <div class="row ketentuan-paket">
                <div class="col">
                <h3>Ketentuan Paket</h3>
                <p>Harga paket sudah termasuk :</p>
                <ul>
                    <li>Akomodasi di hotel pilihan + sarapan pagi.</li>
                    <li>Karcis untuk masuk ke semua objek wisata.</li>
                    <li>
                    Makan siang dan makan malam di lokal restaurant Soul Puncak
                    Lawang.
                    </li>
                    <li>Dapat menggunakan semua fasilitas yang tersedia.</li>
                </ul>
                </div>
            </div>
            </div>
        </section>
@endsection
