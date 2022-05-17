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
                            <form method="POST" action="{{ route($passwordEmailRoute) }}">
								@csrf
                                <div class="form-group">
                                    <label>{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Send Password Reset Link') }}</button>
								<a href="{{ url('admin/login') }}"><i class="fas fa-arrow-circle-left"></i>&nbsp;{{ __('Back to Login') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
