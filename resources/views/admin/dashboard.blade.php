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
                                    <h2 class="title-1">Welcome to Dashboard</h2>
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
