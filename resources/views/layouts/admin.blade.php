<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from zoyothemes.com/tapeli/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 08:33:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title>ADMIN-QT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{asset('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Toastr CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        @yield('css')

    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default">

        <!-- Begin page -->
        <div id="app-layout">


            @include('admins.blocks.header')

            <!-- Left Sidebar Start -->
            @include('admins.blocks.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- content -->
                @yield('content')
                <!-- Footer Start -->
                @include('admins.blocks.footer')
                <!-- end Footer -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        @yield('js')
        <!-- Vendor -->
        <script src="{{asset('assets/admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/admin/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/admin/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/admin/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/admin/libs/feather-icons/feather.min.js')}}"></script>

        <!-- Apexcharts JS -->
        <script src="{{asset('assets/admin/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- for basic area chart -->
        <script src="{{asset('assets/admin/apexcharts.com/samples/assets/stock-prices.js')}}"></script>

        <!-- Widgets Init Js -->
        <script src="{{asset('assets/admin/js/pages/analytics-dashboard.init.js')}}"></script>

        <!-- App js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src="{{asset('assets/admin/js/app.js')}}"></script>
        <script>
            toastr.options = {
                "closeButton": true,         // Hiển thị nút đóng
                "debug": false,              // Bật chế độ debug
                "newestOnTop": true,         // Đưa thông báo mới lên đầu
                "progressBar": true,         // Hiển thị thanh tiến trình
                "positionClass": "toast-top-right",  // Vị trí hiển thị: "toast-top-right", "toast-bottom-right", "toast-bottom-left", "toast-top-left"
                "preventDuplicates": false,  // Ngăn thông báo trùng lặp
                "onclick": null,             // Sự kiện click
                "showDuration": "200",       // Thời gian hiện thông báo (ms)
                "hideDuration": "1000",      // Thời gian ẩn thông báo (ms)
                "timeOut": "2000",           // Thời gian tồn tại của thông báo (ms)
                "extendedTimeOut": "1000",   // Thời gian hiện thêm khi người dùng di chuột vào thông báo (ms)
                "showEasing": "swing",       // Hiệu ứng khi hiện thông báo
                "hideEasing": "linear",      // Hiệu ứng khi ẩn thông báo
                "showMethod": "fadeIn",      // Hiệu ứng hiện thông báo
                "hideMethod": "fadeOut"      // Hiệu ứng ẩn thông báo
            };
        </script>
        
        <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif
        
            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif
        
            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif
        
            @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif
        </script>
        

    </body>

<!-- Mirrored from zoyothemes.com/tapeli/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 08:34:03 GMT -->
</html>