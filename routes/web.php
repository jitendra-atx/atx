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

// admin group


Route::prefix('admin')->group(function () {
		// Admin Registration Routes...
        Route::get('register', 'Admin\Auth\RegisterController@create');
        Route::post('register', 'Admin\Auth\RegisterController@store');
});

// admin group



Route::get('/', function () {
    return view('welcome');
});
