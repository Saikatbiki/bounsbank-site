<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon-->
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="{{ asset('public/image/png" sizes="32x32" href="favicon/favicon-32x32.png') }}">
  <link rel="icon" type="{{ asset('public/image/png" sizes="16x16" href="favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('public/favicon/site.webmanifest') }}">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <script src="https://kit.fontawesome.com/8423ce7f45.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bounsback</title>
</head>

<body>
  <div class="login">
    <div class="container-fluid">

<div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4" style="padding-top: 60px;">
          <img src="{{ asset('public/images/logo.png') }}" alt="" height="70" class="center">
          <div class="log">
            <form method="POST" action="{{ route($loginRoute) }}">
                        @csrf


                        <div class="container1" style="color: #d50606;">
                        <h3 style="font-size: 22px;color: #d50606;">Log in to your account</h3>
                        <h3 style="font-size: 16px;color: #a1a1a1;">Doesn’t have an account yet ?<b style="color: #d50606;"> <u>Sign Up</u></b></h3>

                         <label for="uname"><b>User Name/Phone Number</b></label>
                         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        <label for="psw" style="float: left;"><b>Password</b></label>
                        <label for="psw" style="float: right;"><b><a href="{{ route($forgotPasswordRoute) }}" style="text-decoration: none;color: #d50606;">Forgot Password?</a></b></label>

                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                 <button type="submit" class="cancelbtn" style="    display: block;">
                                    {{ __('Login') }}
                                </button>

                               


                    </form>
          </div>
        </div>
        <div class="col-md-4">
        </div>
      </div>


    </div>

  </div>


<style>
    input[type=email]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #c91414;
    box-sizing: border-box;
}
</style>

  <script src="{{ asset('public/js/script.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
</body>

</html>



