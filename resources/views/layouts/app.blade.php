<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mentor Hub Scholarships Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/backend_assets/images/favicon.png') }}">
	<link rel="stylesheet" href="{{ url('public/backend_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/backend_assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ url('public/backend_assets/css/skin.css') }}">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')


        	
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ url('public/backend_assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ url('public/backend_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ url('public/backend_assets/js/custom.min.js') }}"></script>
		
    <!-- Chart Morris plugin files -->
    <script src="{{ url('public/backend_assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('public/backend_assets/vendor/morris/morris.min.js') }}"></script>
		
	
	<!-- Chart piety plugin files -->
    <script src="{{ url('public/backend_assets/vendor/peity/jquery.peity.min.js') }}"></script>
	
	
	<!-- Svganimation scripts -->
    <script src="{{ url('public/backend_assets/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ url('public/backend_assets/vendor/svganimation/svg.animation.js') }}"></script>
    <script src="{{ url('public/backend_assets/js/styleSwitcher.js') }}"></script>

    
 
		
	@yield('script')
</body>
</html>