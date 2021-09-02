<nav class="row navbar navbar-expand-lg navbar-light bg-light">
    <a href="/index.html" class="navbar-brand">
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
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-1">
                <a href="/index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item mx-md-1">
                <a href="/profil.html" class="nav-link">Profil</a>
            </li>
            <li class="nav-item dropdown mx-md-1">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    id="navbardrop"
                    data-toggle="dropdown"
                    >Wisata
                </a>
                <div class="dropdown-menu">
                    <a href="/soul-puncak-lawang.html" class="dropdown-item"
                    >Soul Puncak Lawang</a
                    ><a href="/lawang-adventure-park.html" class="dropdown-item"
                    >Lawang Park</a
                    ><a href="/ambun-tanai.html" class="dropdown-item"
                    >Ambun Tanai</a
                    >
                </div>
            </li>
            <li class="nav-item mx-md-1">
                <a href="/gallery.html" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item mx-md-1">
                <a href="/about-us.html" class="nav-link">About Us</a>
            </li>
        </ul>

        <!-- Desktop Button -->
        <form
            class="form-inline my-2 my-lg-0 d-sm-block"
            action="/login.html"
        >
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0">
                Log In
            </button>
        </form>
    </div>
</nav>