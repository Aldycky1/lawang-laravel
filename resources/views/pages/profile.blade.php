@extends('layouts.app')

@section('title')
    Profil
@endsection

@section('header')
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item {{ (request()->is('profile')) ? 'active' : '' }}">Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="selamat-datang row">
                <div class="col">
                    <h1 class="text-center">
                        Nagari Lawang, Desa di Agam yang Keindahannya Bikin
                        Terbayang-bayang
                    </h1>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- hero banner -->
        <section class="section-hero-banner">
            <div class="container">
                <div class="row hero-banner">
                    <div class="col-12">
                        <div class="hero-pic">
                            <img
                                src="{{ asset('frontend/frontend/images/hero-profil.jpg') }}"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>

                <div class="row profil-dan-maps mt-3">
                    <div class="col-lg-8">
                        <div class="card card-profil-desa">
                            <h2>Profile Desa</h2>
                            <h3 class="title-wisata">Nagari Lawang</h3>
                            <p class="deskripsi">
                                Nagari Lawang berada di Kecamatan Matur, Kabupaten Agam,
                                Provinsi Sumatra Barat. Luas Nagari Lawang: 16,69 kilometer
                                persegi atau 17,81 persen dari luas wilayah Kecamatan Matur.
                                Nagari Lawang berjarak 3 kilometer dari ibu kota kota
                                kecamatan, 44 kilometer dari ibu kota kabupaten dan 116
                                kilometer dari ibu kota provinsi. Nagari Lawang berpenduduk
                                3.256 jiwa (2017) terdiri dari 1.586 laki-laki dan 1.670
                                perempuan.
                            </p>
                            <p class="deskripsi">
                                Masyarakat Lawang Pada umumnya memiliki mata pencaharian yakni
                                berkebun dan bertani. Tebu lawang salah satu komoditas
                                unggulan yang diolah oleh masyarakat sekitar menjadi Produk
                                UMKM seperti gula semut dan Kacang gula merah. Nagari Lawang
                                terdiri dari sekolompok kawasan yang terdiri dari beberapa
                                destinasi wisata yakni Lawang Park, Soul Puncak Lawang, Green
                                View, Tigo Baleh Nan Basa serta mempunyai atraksi wisata
                                Kilang tebu tradisional dan atraksi seni budaya lainnya.
                            </p>

                            <hr />

                            <h2 class="title-fasilitas mb-3">Fasilitas</h2>
                            <div class="row fasilitas">
                                <div class="col-lg-4">
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Areal Parkir</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Cafetaria</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Musholla</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Spot Foto</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>ATMs</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Jungle Tracking</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Outbond</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Tempat Makan</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Balai Pertemuan</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Kuliner</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Selfie Area</h5>
                                        </div>
                                    </div>
                                    <div class="fasilitas-spesifik d-flex align-items-center">
                                        <img
                                            src="{{ asset('frontend/frontend/images/ic_checklist.svg') }}"
                                            alt=""
                                            class="fasilitas-image"
                                        />
                                        <div class="description">
                                            <h5>Wifi Area</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-0">
                        <div class="card card-maps">
                            <h2>Peta Desa</h2>
                            <div
                                class="maps"
                                style="background-image: url('frontend/frontend/images/maps.JPG')">
                            </div>
                            <a href="https://goo.gl/maps/1bzEhXmXZkg1ZxDV6" target="_blank">Lihat di Google Maps</a>
                            <hr />
                            <h2 class="mb-3" id="contactPerson">Kontak</h2>
                            <div class="detail-kontak d-flex align-items-start mb-2">
                                <img
                                    src="{{ asset('frontend/frontend/images/ic_loc.svg') }}"
                                    alt=""
                                    class="kontak-image"
                                />
                                <div class="kontak-description">
                                    <p>
                                    <span class="font-weight-bold text-info">Alamat :</span>
                                    <br />
                                    Jorong Gajah Mati, Nagari Lawang, Kecamatan Matur,
                                    Kabupaten Agam, Provinsi Sumatera Barat.
                                    </p>
                                </div>
                            </div>
                            <div class="detail-kontak d-flex align-items-start">
                                <img
                                    src="{{ asset('frontend/frontend/images/ic_person.svg') }}"
                                    alt=""
                                    class="kontak-image"
                                />
                                <div class="kontak-description">
                                    <p>
                                    <span class="font-weight-bold text-info"
                                        >Contact Person :</span
                                    >
                                    <br />
                                    Abdul Rahman
                                    </p>
                                </div>
                            </div>
                            <div class="detail-kontak d-flex align-items-start">
                                <img
                                    src="{{ asset('frontend/frontend/images/ic_email.svg') }}"
                                    alt=""
                                    class="kontak-image"
                                />
                                <div class="kontak-description">
                                    <p>
                                    <span class="font-weight-bold text-info">Email :</span>
                                    <br />
                                    kampungwisatalawang@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="detail-kontak d-flex align-items-start">
                                <img
                                    src="{{ asset('frontend/frontend/images/ic_phone.svg') }}"
                                    alt=""
                                    class="kontak-image"
                                />
                                <div class="kontak-description">
                                    <p>
                                    <span class="font-weight-bold text-info">Phone :</span>
                                    <br />
                                    0812 - 6662 - 7449
                                    </p>
                                </div>
                            </div>
                            <div class="detail-kontak d-flex align-items-start">
                                <img
                                    src="{{ asset('frontend/frontend/images/ic_facebook.svg') }}"
                                    alt=""
                                    class="kontak-image"
                                />
                                <div class="kontak-description">
                                    <p>
                                    <span class="font-weight-bold text-info">Facebook :</span>
                                    <br />
                                    Nagari Lawang
                                    </p>
                                </div>
                            </div>
                            <div class="detail-kontak d-flex align-items-start">
                                <img
                                    src="{{ asset('frontend/frontend/images/ic_instagram.svg') }}"
                                    alt=""
                                    class="kontak-image"
                                />
                                <div class="kontak-description">
                                    <p>
                                    <span class="font-weight-bold text-info"
                                        >Instagram :</span
                                    >
                                    <br />
                                    kampung_wisata_lawang
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row oleh-oleh-title">
                    <div class="col-lg-12">
                        <h2>Oleh-oleh Khas</h2>
                    </div>
                </div>

                <div class="row oleh-oleh">
                    <div class="col-lg-4">
                        <div
                            class="card-oleh-oleh"
                            style="
                            background-image: url('frontend/frontend/images/oleh-oleh-1.jpg');
                            "
                        ></div>
                        <h3>Air Tebu</h3>
                        <h3>Rp. 5.000</h3>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="card-oleh-oleh"
                            style="
                            background-image: url('frontend/frontend/images/oleh-oleh-2.jpg');
                            "
                        ></div>
                        <h3>Kacang Lawang</h3>
                        <h3>Rp. 10.000</h3>
                    </div>
                </div>
                <div class="row oleh-oleh-title">
                    <div class="col-lg-12">
                        <h2>Atraksi</h2>
                    </div>
                </div>

                <div class="row oleh-oleh">
                    <div class="col-lg-4">
                        <div
                            class="card-oleh-oleh"
                            style="background-image: url('frontend/frontend/images/atraksi-1.jpg')"
                        ></div>
                        <h3>Kilang Tebu Tradisional</h3>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="card-oleh-oleh"
                            style="background-image: url('frontend/frontend/images/atraksi-2.jpg')"
                        ></div>
                        <h3>Flying Fox Soul Puncak Lawang</h3>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="card-oleh-oleh"
                            style="background-image: url('frontend/frontend/images/atraksi-3.jpg')"
                        ></div>
                        <h3>Paralayang</h3>
                    </div>
                </div>
            </div>
        </section>
@endsection
