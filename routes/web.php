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

Route::get('/home', 'HomeController@index')->name('home');

// admin route created here

Route::get('admin/home','AdminController@index');
Route::GET('admin','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\Auth\LoginController@login');

// Route::get('admin-password/email','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.email');

Route::POST('admin-password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\Auth\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm')->name('admin.passwordf.reset');
Route::GET('admin/register','Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
Route::POST('admin/register','Admin\Auth\RegisterController@register');



// admin route created here