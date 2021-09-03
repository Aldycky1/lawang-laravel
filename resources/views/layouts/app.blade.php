<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- meta --}}
        @include('includes.meta')

        <title>@yield('title')</title>

        {{-- style --}}
        @stack('before-style')
        @include('includes.style')
        @stack('after-style')
    </head>

    <body>
        {{-- navbar --}}
        @include('includes.navbar')

        <hr />

        {{-- header --}}
        @yield('header')

        <main>

            @yield('content')
            
        </main>

        {{-- footer --}}
        @include('includes.footer')

        {{-- script --}}
        @stack('before-style')
        @include('includes.script')
        @stack('after-style')
        
    </body>
</html>
