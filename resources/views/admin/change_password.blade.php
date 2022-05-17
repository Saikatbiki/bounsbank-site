@extends('admin.layouts.app')

@section('content')
<!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('admin.inc.dashboard_header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">My Account</h2>
                                </div>
								
								@if(session('status'))
									<div class="sufee-alert alert with-close alert-light alert-dismissible fade show">
										<span class="badge badge-pill badge-light">Success</span>
										{{session('status')}}
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
								@endif							
								
								<div class="card">
                                    <div class="card-header">
                                        <strong>Change Password</strong>
                                    </div>
									
									
									
                                    <div class="card-body card-block">
									
									<a href="{{ route('admin.myaccount') }}" class="btn btn-outline-info"><i class="fas fa-arrow-circle-left"></i>&nbsp;{{ __('Back') }}&nbsp;</a>
									
									<br/><br/>
									
										@if (\Session::has('error-message'))
											<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											  {!! \Session::get('error-message') !!}
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										@endif
										
										@if (count($errors) > 0)
											<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											  @foreach ($errors->all() as $error)
												  <p>{{ $error }}</p>
											  @endforeach
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										@endif
										
										
										@if (\Session::has('message'))
											<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
												{!! \Session::get('message') !!}
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										@endif
										
                                        <form method="post" action="{{ route('admin.post-changepassword') }}" class="form-horizontal" enctype="multipart/form-data">
											@csrf
																					
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="current_password" class=" form-control-label">Current Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="current_password" name="current_password" placeholder="Enter Current Password" value="" class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="new_password" class=" form-control-label">New Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="new_password" name="new_password" placeholder="Enter New Password" value="" class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="confirm_password" class=" form-control-label">Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password" value="" class="form-control">
                                                </div>
                                            </div>
											<button type="submit" class="btn btn-primary btn-sm">
												<i class="fa fa-dot-circle-o"></i> Submit
											</button>
                                        </form>
                                    </div>
                                </div>
								
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright &copy; {{ date('Y') }} Your Technician | Administrator. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
		
		
@endsection
