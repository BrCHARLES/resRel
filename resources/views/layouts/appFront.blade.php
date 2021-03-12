<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <title>  @yield('title', env('APP_NAME'))</title>
    <link rel="icon" href="{{ asset('ressourcesRelationnelles.ico') }}" />
	<!-- Styles============================================= -->	 

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" /> 
    <link rel="stylesheet" href="{{ asset('css/resrel.css') }}" type="text/css" /> 

   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Roboto">
   @livewireStyles
</head>

<body class="stretched">
	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">

        @yield('content')
        <div class="container justify-content-center mt-3">
          @include('incs.flash-message')
        </div>
        
	</div><!-- #wrapper end -->

	<!-- Go To Top ============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts ============================================= -->
  @livewireScripts
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }} "></script>
  <script src="{{ asset('js/bs-datatable.js') }}"></script>
	<!-- Footer Scripts ============================================= -->
	<script src="{{ asset('js/functions.js') }} "></script>

  <script src="{{ asset('js/icons.js') }} "></script>

    <script>
		$(document).ready(function() {
			$('#datatable1').dataTable();
		});
	</script>
 
 @yield('name')
</body>
</html>