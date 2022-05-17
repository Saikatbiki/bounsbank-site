<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon-->
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('public/favicon/site.webmanifest') }}">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <script src="https://kit.fontawesome.com/8423ce7f45.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bounsbank</title>
</head>

<body onload="slider()">
  <div class="container-fluid " id="topbar">
    <header>
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="gmail">
              <h6>Email : example@gmail.com</h6>
            </div>
          </div>
          <div class="col-md-4 gmai">
            <a href="{{ url('/') }}"><img src="{{ asset('public/images/logo.png') }}" alt="..."></a>
          </div>
          <div class="col-md-4">
            <div class="sign">
              <h6><a style="color: #ce093a; text-decoration: none;" href="{{ route('login') }}">Login</a> | <a style="color: #ce093a; text-decoration: none;" href="{{ route('user-register') }}">Signup</a></h6>
              <div class="gap-2 d-md-flex justify-content-md-end">
                <a  href="play_now.html"><button class="btn-primary me-md-0" type="button">Play Now!</button></a>
               
              </div>
            </div>

          </div>


        </div>
      </div>
  </div>


 @yield('content')


  <div class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 gmai">
          <img src="{{ asset('public/images/logo.png') }}" alt="..." class="center">
        </div>
        <div class="col-md-4">
        </div>

        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="topmenu">
            <div id="Social-icon">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </div>






  <!--script -->

  <script src="{{ asset('public/js/script.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
</body>

</html>