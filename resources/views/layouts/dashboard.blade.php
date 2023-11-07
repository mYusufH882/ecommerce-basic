<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/star-admin2/template/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/star-admin2/template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/star-admin2/template/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/star-admin2/template/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet"
        href="{{asset('assets/star-admin2/template/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/star-admin2/template/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet"
        href="{{asset('assets/star-admin2/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/star-admin2/template/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/star-admin2/template/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/star-admin2/template/images/favicon.png')}}" />
</head>

<body>


    <!-- plugins:js -->
    <script src="{{asset('assets/star-admin2/template/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/star-admin2/template/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/star-admin2/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}">
    </script>
    <script src="{{asset('assets/star-admin2/template/vendors/progressbar.js/progressbar.min.js')}}"></script>

    <div class="container-scroller">
        @include('partials.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebar')
            <div class="main-panel">
                @yield('content')

                <!-- content-wrapper ends -->
                @include('partials.footer')
                <!-- partial -->
            </div>
        </div>
    </div>
    <!-- container-scroller -->

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/star-admin2/template/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/star-admin2/template/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/star-admin2/template/js/template.js')}}"></script>
    <script src="{{asset('assets/star-admin2/template/js/settings.js')}}"></script>
    <script src="{{asset('assets/star-admin2/template/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/star-admin2/template/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/star-admin2/template/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/star-admin2/template/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>