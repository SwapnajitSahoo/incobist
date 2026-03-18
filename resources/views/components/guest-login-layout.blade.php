<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="INCOBIST - ADMIN" name="description">
    <meta content="INCOBIST" name="author">
    <meta name="keywords" content="laravel admin dashboard, best laravel admin panel, laravel admin dashboard, php admin panel template, blade template in laravel, laravel dashboard template, laravel template bootstrap, laravel simple admin panel,laravel dashboard template,laravel bootstrap 4 template, best admin panel for laravel,laravel admin panel template, laravel admin dashboard template, laravel bootstrap admin template, laravel admin template bootstrap 4" />

    <!-- Title -->
    <title>INCOBIST - Admin</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('asset/admin/images/brand/favicon.ico') }}" type="image/x-icon" />

    <!--Bootstrap css -->
    <link href="{{ asset('asset/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('asset/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/admin/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/admin/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{ asset('asset/admin/css/animated.css') }}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ asset('asset/admin/css/icons.css') }}" rel="stylesheet" />


    <!-- Color Skin css -->
    <link id="theme" href="{{ asset('asset/admin/colors/color1.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="h-100vh bg-primary">
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="page">
        <div class="page-content">
              {{ $slot }}
        </div>
    </div>

    <!-- Jquery js-->
    <script src="{{ asset('asset/admin/js/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap4 js-->
    <script src="{{ asset('asset/admin/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Othercharts js-->
    <script src="{{ asset('asset/admin/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

    <!-- Circle-progress js-->
    <script src="{{ asset('asset/admin/js/circle-progress.min.js') }}"></script>

    <!-- Jquery-rating js-->
    <script src="{{ asset('asset/admin/plugins/rating/jquery.rating-stars.js') }}"></script>
    <!-- Custom js-->
    <script src="{{ asset('asset/admin/js/custom.js') }}"></script>
</body>

</html>