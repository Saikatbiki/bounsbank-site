<?php


/* --------------------- Common/User Routes START -------------------------------- */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([ 'verify' => true ]);

//Route::get('/', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/user-register', 'HomeController@userRegister')->name('user-register');

Route::post('/post-user-register', 'HomeController@postUserRegister')->name('post-user-register');

/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        //Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Register Routes
        // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        // Route::post('/register','RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');

    //Put all of your admin routes here...
	Route::get('/my-account','HomeController@myaccount')->name('myaccount')->middleware('guard.verified:admin,admin.verification.notice');
	Route::post('/post-my-account','HomeController@postMyaccount')->name('post-myaccount');
	
	Route::get('/change-password','HomeController@changePassword')->name('changepassword')->middleware('guard.verified:admin,admin.verification.notice');
	Route::post('/post-change-password','HomeController@postChangePassword')->name('post-changepassword');
	
	Route::get('/site-settings','HomeController@getSiteSettings')->name('site_settings')->middleware('guard.verified:admin,admin.verification.notice');
	Route::post('/post-site-settings','HomeController@postSiteSettings')->name('post-sitesettings');

});

/* ----------------------- Admin Routes END -------------------------------- */
