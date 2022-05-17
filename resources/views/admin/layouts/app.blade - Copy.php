<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('public/admin/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">

    <style>
        /*
            these styles will animate bootstrap alerts.
        */
        .alert{
            z-index: 99;
            top: 60px;
            right:18px;
            min-width:30%;
            position: fixed;
            animation: slide 0.5s forwards;
        }

        @keyframes slide {
            100% { top: 30px; }
        }

        @media screen and (max-width: 668px) {
            .alert{ /* center the alert on small screens */
                left: 10px;
                right: 10px; 
            }
        }
    </style>

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
<body>

    @include('admin.inc.navbar')
    <main class="container mt-4">
        @yield('content')
    </main>

    <script src="{{asset('public/js/app.js')}}"></script>
    
    {{-- Success Alert --}}
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Error Alert --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
			setTimeout(function() {
	        	$(".alert").alert('close');
	    	}, 3000);
    	});
    </script>
    
</body>
</html>