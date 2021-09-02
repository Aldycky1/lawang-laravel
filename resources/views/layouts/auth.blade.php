<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Meta --}}
        @include('includes.auth.meta')

        <title>@yield('title')</title>

        {{-- Style --}}
        @stack('before-style')
        @include('includes.auth.style')
        @stack('after-style')
    </head>

    <body>
        <!-- Navbar -->
        <div class="container">

            {{-- Navbar --}}
            @include('includes.auth.navbar')

        </div>

        <hr />

        {{-- Header --}}        
        <header>
            <h2 class="text-center mb-5">@yield('header')</h2>
        </header>

        {{-- Content --}}
        @yield('content')

        {{-- footer --}}
        @include('includes.auth.footer')

        {{-- script --}}
        @stack('before-script')
        @include('includes.auth.script')
        @stack('after-script')
        
    </body>
</html>
