<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('public/admin/favicon.png') }}" type="image/x-icon" />
	
    <title>{{env('ADMIN_TITLE')}}</title>
	
	<!-- Fontfaces CSS-->
    <link href="{{ asset('public/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('public/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('public/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('public/admin/css/theme.css') }}" rel="stylesheet" media="all">

	
	
</head>
<body class="animsition">
    <div class="page-wrapper">
		@if(Auth::guard('admin')->check())
			@include('admin.inc.admin_header')
			@include('admin.inc.admin_sidebar')
		@endif
        @yield('content')
    </div>
	
    

    <!-- Jquery JS-->
    <script src="{{ asset('public/admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('public/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('public/admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('public/admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('public/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('public/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('public/admin/js/main.js') }}"></script>
	
	<script>
        //close the alert after 3 seconds.
        /*$(document).ready(function(){
			setTimeout(function() {
	        	$(".alert").hide('slow');
	    	}, 3000);
    	});*/
		function readURL(input) 
		{
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#profile_img_preview').show();
					$('#profile_img_preview').attr('src', e.target.result);
				}
				
				reader.readAsDataURL(input.files[0]);
			}
		}
    
		$("#profile_img").change(function(){
			readURL(this);
		});
		
		function readURL(input) 
		{
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#header_logo_preview').show();
					$('#header_logo_preview').attr('src', e.target.result);
				}
				
				reader.readAsDataURL(input.files[0]);
			}
		}
    
		$("#header_logo").change(function(){
			readURL(this);
		});
    </script>

</body>

</html>