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
                                        <strong>Edit Account</strong>
                                    </div>
                                    <div class="card-body card-block">
									
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
										
                                        <form method="post" action="{{ route('admin.post-myaccount') }}" class="form-horizontal" enctype="multipart/form-data">
											@csrf
											
											<div class="row form-group image-upload">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Profile Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="profile_img" name="profile_img" />
													@if(Auth::user()->profile_img!='')
														<img id="profile_img_preview" src="{{ asset('public/uploads/profile_image/'.Auth::user()->profile_img) }}" alt="Preview" />
													@else
														<img id="profile_img_preview" src="#" alt="Preview" style="display:none;" />
													@endif
                                                </div>												
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="name" id="name" name="name" placeholder="Enter Name" value="{{ Auth::user()->name }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" placeholder="Enter Email" value="{{ Auth::user()->email }}" class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="phone" class=" form-control-label">Phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="phone" name="phone" placeholder="Enter Phone" value="{{ Auth::user()->phone }}" class="form-control">
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="phone" class=" form-control-label">Change Password</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('admin.changepassword') }}" style="color:#fff;">Change Password</a>
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
