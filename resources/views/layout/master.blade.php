@include('layout._head')

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader loader-7">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('layout._navbar')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            @include('layout._sidebar')

            <!-- Container-fluid starts-->
            <div class="page-body">
                @yield('container-fluid')
                <!-- Container-fluid Ends-->
            </div>

    @include('layout._footer')
</body>
</html>

