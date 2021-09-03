@extends('layouts.app')

@section('title')
    Home
@endsection

@section('header')
    <!-- header -->
    <header>
        <div class="container">
            <div class="selamat-datang row">
                <div class="col">
                    <h1 class="text-center">
                        Selamat Datang di Desa Wisata Nagari Lawang
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
            <div class="row">
                <div class="col-6 mt-4">
                    <h2>
                        Ajak Keluargamu Untuk
                        <br />
                        Liburan di Kampung Wisata Ini
                    </h2>
                    <p class="hero-description">
                        Kampung Wisata Lawang merupakan salah satu nagari yang terletak
                        di Kecamatan Matur, Kabupaten Agam, Provinsi Sumatera Barat.
                    </p>
                    <a
                        href="#wisataContent"
                        class="btn btn-utama btn-mulai-libur mt-4 mx-1"
                        >Mulai Berlibur</a
                    />
                    <a
                        href="/profil.html"
                        class="btn btn-kedua btn-lihat-selengkapnya mt-4 mx-1"
                        >Lihat Selengkapnya</a
                    />
                </div>
                <div class="col-6 pl-5">
                    <div style="width: 520; height: 410">
                        <img
                            src="{{ asset('frontend/frontend/images/img-hero.jpg') }}"
                            alt=""
                            class="img-fluid position-absolute"
                            style="margin: -30px 0 0 -30px; z-index: 1"
                        />
                        <img
                            src="{{ asset('frontend/frontend/images/img-hero_.jpg') }}"
                            alt=""
                            class="img-fluid position-absolute"
                            style="margin: -0 -15px 15px -0"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- aneka-wisata-title -->
    <section class="section-wisata-title" id="wisataContent">
        <hr />
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Aneka Wisata</h2>
                    <p class="wisata-description">
                        Jelajahi aneka wisata di desa ini
                        <br />
                        dengan pengalaman yang menarik dan seru
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- aneka-wisata-content -->
    <section class="section-wisata-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="/soul-puncak-lawang.html" class="card-wisata-link">
                        <div
                            class="card-wisata"
                            style="background-image: url('frontend/frontend/images/wisata-1.jpg')"
                        >
                        <div class="linear-gradient" style="z-index: 1">
                            <h3 class="text-center text-light justify-content-center">
                                Soul Puncak Lawang
                            </h3>
                            <div class="popular" style="z-index: 1">Wisata Popular</div>
                        </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                <a href="/lawang-adventure-park.html" class="card-wisata-link">
                    <div
                    class="card-wisata"
                    style="background-image: url('frontend/frontend/images/wisata-2.jpg')"
                    >
                    <div class="linear-gradient" style="z-index: 1">
                        <h3 class="text-center text-light justify-content-center">
                            Lawang Park
                        </h3>
                    </div>
                    </div>
                </a>
                </div>
                <div class="col-lg-4">
                <a href="/ambun-tanai.html" class="card-wisata-link">
                    <div
                        class="card-wisata"
                        style="background-image: url('frontend/frontend/images/wisata-3.jpg')"
                    >
                        <div class="linear-gradient">
                            <h3 class="text-center text-light justify-content-center">
                                Ambun Tanai
                            </h3>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-title">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <h2>Lihat Pengalaman Mereka</h2>
                <p class="testimonial-description">
                    Mereka telah merasakan
                    <br />
                    pengalaman serunya berwisata di desa ini
                </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="card card-testimonial">
                        <div class="testimonial-content">
                            <img
                                src="{{ asset('frontend/frontend/images/user-pic-1.jpg') }}"
                                alt=""
                                class="mb-4 rounded-circle"
                                style="width: 120px"
                            />

                            <p class="quotes">
                                "Fasilitas hotelnya oke, harga juga terjangkau, paket yang
                                disediakan juga cocok... pokoknya puas deh berlibur ke desa
                                wisata kampung lawang"
                            </p>
                        </div>
                        <hr />
                        <h4>Alifah Fadiyah</h4>
                        <p class="job">Designer</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card card-testimonial">
                        <div class="testimonial-content">
                            <img
                                src="{{ asset('frontend/frontend/images/user-pic-2.jpg') }}"
                                alt=""
                                class="mb-4 rounded-circle"
                                style="width: 120px"
                            />
                            <p class="quotes">
                                “Tempat wisatanya asik, pemandangannya indah, pelayanannya
                                ramah, pokoknya semuanya mantep deh”
                            </p>
                        </div>
                        <hr />
                        <h4>Alifiah Putri Aisyah</h4>
                        <p class="job">Database Engineer</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card card-testimonial">
                        <div class="testimonial-content">
                            <img
                                src="{{ asset('frontend/frontend/images/haniifah-person.jpg') }}"
                                alt=""
                                class="mb-4 rounded-circle"
                                style="width: 120px"
                            />
                            <p class="quotes">
                                “Puncak Lawang sangat cocok untuk kalian yang ingin pergi ke
                                tempat wisata pegunungan, tempat ini menyajikan pemandangan
                                yang indah dan udara nya yang sangat sejuk ”
                            </p>
                        </div>
                        <hr />
                        <h4>Haniifah Fawziyyah</h4>
                        <p class="job">Designer</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#wisataContent" class="btn btn-utama mt-4 mx-1"
                        >Booking Paket</a
                    >
                    <a
                        href="/profil.html#contactPerson"
                        class="btn btn-kedua mt-4 mx-1"
                        >Butuh Bantuan</a
                    >
                </div>
            </div>
        </div>
    </section>
@endsection
