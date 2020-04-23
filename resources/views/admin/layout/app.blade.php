<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title> @yield('title') </title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{asset('admin/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Tablesaw table CSS -->
    <link href="{{asset('admin/vendors/tablesaw/dist/tablesaw.css')}}" rel="stylesheet" type="text/css" />

    <!-- select2 CSS -->
    <link href="{{asset('admin/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

	  <!-- Toastr CSS -->
    <link href="{{asset('admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
        @include('sweetalert::alert')
        @include('admin.layout.navbar')
        @include('admin.layout.sidebar')
        @include('admin.layout.panel')

        <!-- Main Content -->
        <div class="hk-pg-wrapper">

          @yield('content')

            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid px-xxl-65 px-xl-20">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>mocharasa © 2020</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-instagram"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-youtube-play"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="{{asset('admin/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>



    <!-- Slimscroll JavaScript -->
    <script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('admin/dist/js/feather.min.js')}}"></script>

    <!-- Select2 JavaScript -->
    <script src="{{asset('admin/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/select2-data.js')}}"></script>

    <!-- Tinymce JavaScript -->
    <script src="{{asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>
    <!-- Tinymce Wysuhtml5 Init JavaScript -->
    <script src="{{asset('admin/dist/js/tinymce-data.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('admin/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/toggle-data.js')}}"></script>

	  <!-- Owl JavaScript -->
    <script src="{{asset('admin/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- Tablesaw JavaScript -->
    <script src="{{asset('admin/vendors/tablesaw/dist/tablesaw.jquery.js')}}"></script>
    <script src="{{asset('admin/dist/js/tablesaw-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('admin/dist/js/init.js')}}"></script>
    <script src="{{asset('admin/dist/js/validation-data.js')}}"></script>


</body>

</html>
