<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Title -->
    <title>GEOREC SARL</title>
    @include('front-end.layouts.style')
</head>

<body>
    <!-- Header -->
    @include('front-end.required.header')
    <!-- Header End -->

    <!-- Main -->
    <main id="main">

        @yield('content')

    </main>
    <!-- End Main -->

    <!-- Footer -->
    @include('front-end.required.footer')
    <!-- End Footer -->

    <!-- script -->
    @include('front-end.layouts.js')
    <!-- End script -->

</body>
<!-- end body -->

</html>
