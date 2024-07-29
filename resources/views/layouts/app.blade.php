<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
    

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>

    <!-- ##### Header Area Start ##### -->
    @include('layouts.header')
    <!-- ##### Header Area End ##### -->

    @include('layouts.cart')

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.footer')
    <!-- ##### Footer Area End ##### -->

</body>
<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- Classy Nav js -->
<script src="{{ asset('js/classy-nav.min.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>

<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js')}}"></script>
<script src="{{ asset('assets/modules/popper.js')}}"></script>
<script src="{{ asset('assets/modules/tooltip.js')}}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.j')}}s"></script>
<script src="{{ asset('assets/modules/moment.min.js')}}"></script>
<script src="{{ asset('assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>