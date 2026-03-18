<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="INCOBIST - Admin" name="description">
    <meta content="INCOBIST - Admin" name="author">
    <meta name="keywords" content="INCOBIST - Admin" />

    <!-- Title -->
    <title>INCOBIST - Dashboard</title>

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

    <!--Sidemenu css -->
    <link href="{{ asset('asset/admin/css/sidemenu.css') }}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{ asset('asset/admin/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ asset('asset/admin/css/icons.css') }}" rel="stylesheet" />

    <!-- Simplebar css -->
    <link rel="stylesheet" href="{{ asset('asset/admin/plugins/simplebar/css/simplebar.css') }}">

    <!-- Color Skin css -->
    <link id="theme" href="{{ asset('asset/admin/colors/color1.css') }}" rel="stylesheet" type="text/css" />

    <!-- Switcher css -->
    <link rel="stylesheet" href="{{ asset('asset/admin/switcher/css/switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/admin/switcher/demo.css') }}">

</head>

<body class="app sidebar-mini">



    <!---Global-loader-->
    <div id="global-loader">
        <img src="{{ asset('asset/admin/images/svgs/loader.svg') }}" alt="loader">
    </div>
    <!--- End Global-loader-->
    <!-- Page -->
    <div class="page">
        <div class="page-main">
            @include('layouts.admin_sidebar')
            <!--aside closed--> <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">

                    @include('layouts.navigation')

                    {{ $slot }}

                </div>
            </div>
            <!-- End app-content-->
        </div>
        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2020 <a href="#">Incobist</a>. Designed by <a href="#">Incobist</a> All rights
                        reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div><!-- End Page -->
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

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

    <!--Sidemenu js-->
    <script src="{{ asset('asset/admin/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- P-scroll js-->
    <script src="{{ asset('asset/admin/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/p-scrollbar/p-scroll1.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/p-scrollbar/p-scroll.js') }}"></script>


    <!--INTERNAL Peitychart js-->
    <script src="{{ asset('asset/admin/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/peitychart/peitychart.init.js') }}"></script>

    <!--INTERNAL Apexchart js-->
    <script src="{{ asset('asset/admin/js/apexcharts.js') }}"></script>

    <!--INTERNAL ECharts js-->
    <script src="{{ asset('asset/admin/plugins/echarts/echarts.js') }}"></script>

    <!--INTERNAL Chart js -->
    <script src="{{ asset('asset/admin/plugins/chart/chart.bundle.js') }}"></script>
    <script src="{{ asset('asset/admin/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('asset/admin/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('asset/admin/js/select2.js') }}"></script>

    <!--INTERNAL Moment js-->
    <script src="{{ asset('asset/admin/plugins/moment/moment.js') }}"></script>

    <!--INTERNAL Index js-->
    <script src="{{ asset('asset/admin/js/index1.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('asset/admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Custom js-->
    <script src="{{ asset('asset/admin/js/custom.js') }}"></script>

    <!-- Switcher js-->
    <script src="{{ asset('asset/admin/switcher/js/switcher.js') }}"></script>
</body>

</html>