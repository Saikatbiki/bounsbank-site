@extends('admin.layouts.app')

@section('content')
<div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('public/admin/images/site-logo.png') }}" alt="Your Technician">
                            </a>
                        </div>
                        <div class="login-form">
							@if(session('status'))
								<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
									
									{{session('status')}}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
							@endif
                            <form method="POST" action="{{ route($loginRoute) }}">
								@csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
									@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
                                </div>
                                <div class="login-checkbox">
                                    <label>
										<input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label class="form-check-label" for="remember">
											{{ __('Remember Me') }}
										</label>
                                    </label>
                                    <label>
                                        <a href="{{ route($forgotPasswordRoute) }}">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
