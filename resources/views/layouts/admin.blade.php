<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.admin.meta')

    <title>@yield('title')</title>

    @stack('before-style')
    @include('includes.admin.style')
    @stack('after-style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('includes.admin.navbar')                

                @yield('content')                

            </div>
            <!-- End of Main Content -->

            {{-- Footer --}}
            @include('includes.admin.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    {{-- Scroll --}}
    @include('includes.admin.scroll')

    {{-- logout-modal --}}
    @include('includes.admin.logout-modal')

    @stack('before-script')
    @include('includes.admin.script')
    @stack('after-script')

</body>

</html>