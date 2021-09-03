<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img
                src="{{ asset('frontend/frontend/images/logo.png') }}"
                alt="logo-nagari-lawang"
                height="66"
            />
        </a>
        <button
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navb"
        >
            <span span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-1">
                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-1">
                    <a href="#" class="nav-link">Profil</a>
                </li>
                <li class="nav-item dropdown mx-md-1">
                    <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        id="navbardrop"
                        data-toggle="dropdown"
                        >
                        Wisata
                    </a>
                <div class="dropdown-menu">
                    <a href="/soul-puncak-lawang.html" class="dropdown-item">Soul Puncak Lawang</a>
                    <a href="/lawang-adventure-park.html" class="dropdown-item">Lawang Park</a>
                    <a href="/ambun-tanai.html" class="dropdown-item">Ambun Tanai</a>
                </div>
                </li>
                <li class="nav-item mx-md-1">
                    <a href="/gallery.html" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item mx-md-1">
                    <a href="/about-us.html" class="nav-link">About Us</a>
                </li>
            </ul>

            @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown mx-md-1">
                        <a
                            href="#"
                            class="nav-link dropdown-toggle"
                            id="navbardrop"
                            data-toggle="dropdown"
                            >{{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a href="/akun.html" class="dropdown-item">Ubah Profil</a>
                            <a href="/daftar-checkout.html" class="dropdown-item">Daftar Checkout</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Keluar</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            @endauth

            @guest
                <!-- Desktop Button -->
                <form
                    class="form-inline my-2 my-lg-0 d-sm-block"
                    action="{{ route('login') }}"
                >
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0">
                        Log In
                    </button>
                </form>
            @endguest
        
        </div>
    </nav>
</div>