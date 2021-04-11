<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title","Tekhnoliniya")</title>
    <meta name="keywords" content="Tekhnoliniya">
    <meta name="description" content="Tekhnoliniya">
    <meta name="author" content="Tekhnoliniya">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/about-header-bg.jpg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('assets/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Tekhnoliniya">
    <meta name="application-name" content="Tekhnoliniya">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nouislider/nouislider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skins/skin-demo-22.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    @stack('stylesheets')
</head>

<body>
<div class="page-wrapper">
    {{-- Header section start--}}
    @include('app.layouts.parts.header')
    {{-- Header section end--}}

    @yield('content')

    {{-- Footer section start--}}
    @include('app.layouts.parts.footer')
    {{-- Footer section end--}}
</div>

{{-- Mobile header section start--}}
@include('app.layouts.parts.mobile_header')
{{-- Mobile header section end--}}

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/superfish.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.elevateZoom.min.js') }}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/wNumb.js')}}"></script>
<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{asset('assets/js/cart.js')}}"></script>

<!-- Main JS File -->
@stack('scripts')
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/demos/demo-11.js')}}"></script>
</body>
</html>
