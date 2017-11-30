<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', 'HomeController@logout');

Route::get('/home', 'HomeController@index')->name('home');

 //validate email address
Route::get('verify-email/{token}/{uuid}', 'Auth\Email\EmailAuthentication@verify_email')->name('verify-email');

//change-email
Route::get('change-email/{uuid}', 'Auth\Email\EmailAuthentication@change_email');
Route::get('resend-email/{uuid}', 'Auth\Email\EmailAuthentication@resend_email');
Route::post('change-email', 'Auth\Email\EmailAuthentication@update_email')->name('email.reset');

//set Account
Route::get('set-account/{uuid}', 'Auth\Account\SetAccount@set_account')->middleware('auth');
Route::post('set-user-account', 'Auth\Account\SetAccount@update_account')->name('set_account');

//phone verification 
Route::get('verify-phone','Auth\Account\VerifyPhone@show')->middleware('auth');
Route::get('/resend-code','Auth\Account\VerifyPhone@ResendCode')->middleware('auth');
Route::post('check-phoneToken','Auth\Account\VerifyPhone@verify')->middleware('auth');

//Admin Verification Route
Route::resource('verify-users', 'Admin\Verify\VerificationController')->middleware('auth');