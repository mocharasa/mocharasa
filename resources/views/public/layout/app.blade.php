<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('favicon.ico')}}" rel="icon">
  <link href="{{asset('public/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Stuff that Makes Awesome Stuff Awesomer -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('public/vendor/owl.carousel/public/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('public/css/font-awesome.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('public.layout.menu')

  @yield('breadcrumb')

  <main id="main">
	@yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('public.layout.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('public/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('public/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('public/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('public/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/vendor/aos/aos.js')}}"></script>
  <script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }
    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>
  <!-- Template Main JS File -->
  <script src="{{asset('public/js/main.js')}}"></script>

</body>

</html>
