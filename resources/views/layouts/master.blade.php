<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UR |Card</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}"  rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyPhoto.css' )}}" rel="stylesheet">
    <link href="{{asset('assets/css/price-range.css' )}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css') }}" rel="stylesheet">
	<link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/edit-style.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
	<!-- folder ico not exists -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

	<!-- heaer goes here! -->
  @include('layouts.head')
    
	

   @yield('content')

   @include('layouts.footer')	
</body>

    <script src="{{ asset('assets/js/jquery.js')}} "></script>
	<script src=" {{ asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{ asset('assets/js/price-range.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    
</html>