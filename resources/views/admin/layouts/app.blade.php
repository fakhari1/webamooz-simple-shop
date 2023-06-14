<!doctype html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8"/>
    <title>Dashboard | پنل مدیریت فوداتکو</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/preloader.min.css') }}" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard/assets/css/bootstrap-rtl.min.css') }}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('dashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ asset('dashboard/assets/css/app-rtl.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/flatpickr/flatpickr.min.css') }}">
    <!-- inject:css -->

    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <link rel="stylesheet" href="{{ asset('fonts/fa5/all.min.css') }}">
    <!-- End layout styles -->

    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/sweetalert2.css') }}">


    <link rel="stylesheet" href="{{ asset('dashboard/style/css/style-rtl.min.css') }}">
    <!-- Layout styles -->

    {{--    <link rel="shortcut icon" href="style/images/favicon.png" />--}}

    @yield('head')
</head>
<style type="text/css">
    @font-face {
        font-family: "iransans";
        src: url("{{ asset('dashboard/style/fonts/IRANSansWeb_Light.html') }}") format("woff2");
        src: url("{{ asset('dashboard/style/fonts/IRANSansWeb_Light.woff') }}") format("woff");
    }

    * body {
        font-family: iransans;

    }
</style>
<body>

<!-- <body data-layout="horizontal"> -->

@include('admin.partials.__wrapper')

@include('admin.partials.__rightbar')


<!-- javascript -->
<script src="{{ asset('dashboard/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/libs/node-waves/waves.min.js') }}"></script>

<!-- pace js -->
<script src="{{ asset('dashboard/assets/libs/pace-js/pace.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>

<!-- end inject -->
<script src="{{ asset('dashboard/style/js/dashboard-light.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('dashboard/style/js/template.html') }}"></script>

<script src="{{ asset('dashboard/assets/js/app.js') }}"></script>

<script src="{{ asset('fonts/fa5/all.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/sweet-alert.js') }}"></script>

@yield('script')
@include('admin.partials.__show-sweet-alert')
</body>

</html>
