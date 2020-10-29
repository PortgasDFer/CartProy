<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="{{asset('/aroma-master/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/aroma-master/vendors/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('/aroma-master/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/aroma-master/vendors/nice-select/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('/aroma-master/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('/aroma-master/vendors/owl-carousel/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
    @include('layouts.headers.header')
	<!--================ End Header Menu Area =================-->
    @yield('content')
  <!--================ Start footer Area  =================-->	
    @include('layouts.footers.navsite')
	<!--================ End footer Area  =================-->
  <script src="{{asset('/aroma-master/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('/aroma-master/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/aroma-master/vendors/skrollr.min.js')}}"></script>
  <script src="{{asset('/aroma-master/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/aroma-master/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('/aroma-master/vendors/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('/aroma-master/vendors/mail-script.js')}}"></script>
  <script src="{{asset('/aroma-master/js/main.js')}}"></script>
</body>
</html>