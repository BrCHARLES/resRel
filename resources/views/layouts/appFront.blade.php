<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }}</title>
  
	<!-- Styles============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/resrel.css') }}" type="text/css" /> 
   
   <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body class="stretched">
    <div id="wrapper" class="clearfix">
        @include('incs.headerFront')    
        @yield('content')
        @include('incs.footerFront')
            
    </div><!-- #wrapper end -->

	<!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    

	<!-- JavaScripts--> 
	 

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script> 
	<script src="{{ asset('js/functions.js') }}"></script>
	
    @livewireScripts

</body>
</html>
