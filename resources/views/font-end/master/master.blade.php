<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('font-end/css/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('font-end/css/magnific-popup.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-end/css/font-awesome.css')}}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('font-end/css/jquery.fancybox.min.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('font-end/css/themify-icons.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('font-end/css/niceselect.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('font-end/css/animate.css')}}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('font-end/css/flex-slider.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('font-end/css/owl-carousel.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('font-end/css/slicknav.min.css')}}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{asset('font-end/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('font-end/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('font-end/css/responsive.css')}}">
    <script src="{{ asset('js/my.js') }}"></script>

</head>
<body class="js">



<!-- Header -->
@include('font-end.core.header')
<!--/ End Header -->
@yield('content')

<!-- Start Footer Area -->
@include('font-end.core.footer')
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{asset('font-end/js/jquery.min.js')}}"></script>
<script src="{{asset('font-end/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('font-end/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('font-end/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('font-end/js/bootstrap.min.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('font-end/js/colors.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('font-end/js/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('font-end/js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('font-end/js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('font-end/js/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('font-end/js/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('font-end/js/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
<script src="{{asset('font-end/js/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('font-end/js/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('font-end/js/onepage-nav.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('font-end/js/easing.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('font-end/js/active.js')}}"></script>
</body>
</html>

