@extends('layouts.app')

@section('title')
    {{ $item->name }}
@endsection

@section('header')
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index.html">Home</a></li>
                            <li class="breadcrumb-item active">{{ $item->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="selamat-datang row">
                <div class="col">
                    <h1 class="text-center">{{ $item->name }}</h1>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- hero banner -->
      <section class="section-hero-banner">
        <div class="container">
            <div class="row hero-aneka-wisata align-items-start">
                <div class="col-7">
                    <div class="aneka-wisata-pic">
                        <img
                            src="
                                {{-- {{ asset('frontend/frontend/images/soul-puncak-lawang.jpg') }} --}}
                                @foreach($item->tourist_galleries as $image)
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
                    Soul Puncak Lawang adalah sebuah objek wisata alam yang
                    menyajikan keindahan alam Danau Maninjau dengan rindangnya hutan
                    pinus dan udara sejuk. Keindahan Danau Maninjau dapat dilihat
                    dari ketinggian 1.210 mdpl puncak tertingginya Nagari Lawang.
                    Soul Puncak Lawang memiliki keunggulan pemandangan yang indah.
                    Pada segi fasilitasnya Soul Puncak Lawang berusaha untuk menjadi
                    lebih baik lagi. Serta pada bidang pelayanan, lebih ditata dari
                    sebelumnya. Hal ini, membuat potensi yang dimiliki oleh Soul
                    Puncak Lawang menjadi menarik untuk diperkenalkan ke masyarakat
                    luas.
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
                    <p class="align-items-center d-inline">
                    <span class="font-weight-bold text-info">Alamat :</span>
                    Nagari Lawang, Kecamatan Matur, Kabupaten Agam, Provinsi
                    Sumatera Barat 26162.
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
                        <td width="40%">Senin - Sabtu</td>
                        <td width="40%">Minggu - Hari Libur</td>
                    </tr>
                    <tr>
                        <th scope="row" class="">Tiket Masuk</th>
                        <td>Rp. 20.000</td>
                        <td>Rp. 25.000</td>
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
                        <th width="50%" scope="row">Setiap Hari</th>
                        <td>08.00 - 18.00</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="row objek-fasilitas">
                <div class="col objek-wisata">
                <h3>Objek Wisata</h3>
                <ul>
                    <li>Etnic Village</li>
                    <li>Jembatan Goyang</li>
                    <li>Flying Fox</li>
                    <li>Paralayan</li>
                    <li>Wahana Selfie</li>
                </ul>
                </div>
                <div class="col fasilitas border-left border-dark">
                <h3>Fasilitas</h3>
                <ul>
                    <li>Kendaraan Angkut Khusus</li>
                    <li>Mushola</li>
                    <li>Toilet</li>
                    <li>Parkir Kendaraan</li>
                    <li>Restaurant atau Cafe</li>
                </ul>
                </div>
            </div>
            <div class="row tiket-masuk">
                <div class="col">
                <div class="2-hari-1-malam">
                    <div class="title-tiket-masuk mb-3">
                    <h3>Paket Wisata</h3>
                    <h5 class="mt-5">Paket 2 Hari 1 Malam</h5>
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
                        <th scope="col" class="text-center">2-3 orang</th>
                        <th scope="col" class="text-center">4-5 orang</th>
                        <th scope="col" class="text-center">6-9 orang</th>
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
            <div class="row tiket-masuk">
                <div class="col">
                <div class="3-hari-2-malam mt-3">
                    <div class="title-tiket-masuk mb-3">
                    <h5>Paket 3 Hari 2 Malam</h5>
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
                        <th scope="col" class="text-center">2-3 orang</th>
                        <th scope="col" class="text-center">4-5 orang</th>
                        <th scope="col" class="text-center">6-9 orang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">Hotel Benteng</th>
                        <td>Rp. 1.164.887</td>
                        <td>Rp. 1.234.990</td>
                        <td>Rp. 1.304.887</td>
                        </tr>
                        <tr>
                        <th scope="row">OYO 555 Aedo</th>
                        <td>Rp. 1.235.133</td>
                        <td>Rp. 1.304.980</td>
                        <td>Rp. 1.375.150</td>
                        </tr>
                        <tr>
                        <th scope="row">Campago Hotel</th>
                        <td>Rp. 1.255.795</td>
                        <td>Rp. 1.325.750</td>
                        <td>Rp. 1.395.795</td>
                        </tr>
                        <tr>
                        <th scope="row">Grand Gallery Hotel Bukittinggi</th>
                        <td>Rp. 1.336.759</td>
                        <td>Rp. 1.406.750</td>
                        <td>Rp. 1.476.759</td>
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
            <div class="row tiket-masuk">
                <div class="col">
                <div class="4-hari-3-malam mt-3">
                    <div class="title-tiket-masuk mb-3">
                    <h5>Paket 4 Hari 3 Malam</h5>
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
                        <th scope="col" class="text-center">2-3 orang</th>
                        <th scope="col" class="text-center">4-5 orang</th>
                        <th scope="col" class="text-center">6-9 orang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">Hotel Benteng</th>
                        <td>Rp. 1.264.887</td>
                        <td>Rp. 1.334.990</td>
                        <td>Rp. 1.404.887</td>
                        </tr>
                        <tr>
                        <th scope="row">OYO 555 Aedo</th>
                        <td>Rp. 1.335.133</td>
                        <td>Rp. 1.404.980</td>
                        <td>Rp. 1.475.150</td>
                        </tr>
                        <tr>
                        <th scope="row">Campago Hotel</th>
                        <td>Rp. 1.355.795</td>
                        <td>Rp. 1.425.750</td>
                        <td>Rp. 1.495.795</td>
                        </tr>
                        <tr>
                        <th scope="row">Grand Gallery Hotel Bukittinggi</th>
                        <td>Rp. 1.436.759</td>
                        <td>Rp. 1.506.750</td>
                        <td>Rp. 1.576.759</td>
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
