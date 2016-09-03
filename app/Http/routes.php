<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Main
Route::get('/', 'MainController@index');

//Send reservation request
Route::post('/reserve', 'ReserveController@reserve');

//admin
Route::group([ 'middleware' => 'auth' ], function () {
    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/calendar', 'AdminController@calendar');
    Route::get('/admin/history', 'AdminController@history');

    Route::post('/admin/delete', 'AdminController@delete');

    Route::get('/admin/pricing', 'AdminController@price');
    Route::post('/admin/setprice', 'AdminController@setPrice');

    Route::get('/admin/topslider', 'ImageController@topSlider');
    Route::get('/admin/topslider/upload', 'ImageController@getUploadTop');
    Route::post('/admin/topslider/uploader', 'ImageController@storeTop');
    Route::post('/admin/topslider/delete', 'ImageController@deleteTop');

    Route::get('/admin/midslider', 'ImageController@midSlider');
    Route::get('/admin/midslider/upload', 'ImageController@getUploadMid');
    Route::post('/admin/midslider/uploader', 'ImageController@storeMid');
    Route::post('/admin/midslider/delete', 'ImageController@deleteMid');

    Route::post('/admin/topslider/order', 'ImageController@order');

    Route::get('/admin/email', 'EmailController@index');
    Route::post('/admin/email/add', 'EmailController@addEmail');
    Route::post('/admin/email/delete', 'EmailController@deleteEmail');

    Route::get('/admin/register', function (){
        return view('admin.register');
    });

    Route::post('register', 'MainController@createUser');
});



Route::get('upload', function() {
    return View::make('upload');
});

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');
