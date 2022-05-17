<!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="float:right;">
                           
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
											@if(Auth::user()->profile_img!='')
											<img src="{{ asset('public/uploads/profile_image/'.Auth::user()->profile_img) }}" alt="John Doe" />
											@else
                                            <img src="{{ asset('public/admin/images/no-user-icon.png') }}" alt="{{ Auth::user()->name }}" />
											@endif
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        @if(Auth::user()->profile_img!='')
														<img src="{{ asset('public/uploads/profile_image/'.Auth::user()->profile_img) }}" alt="John Doe" />
														@else
														<img src="{{ asset('public/admin/images/no-user-icon.png') }}" alt="{{ Auth::user()->name }}" />
														@endif
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="{{ route('admin.myaccount') }}">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('admin.myaccount') }}">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('admin.site_settings') }}">
                                                        <i class="zmdi zmdi-settings"></i>Site Settings</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#" onclick="event.preventDefault();
                                                document.querySelector('#admin-logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
													<form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->