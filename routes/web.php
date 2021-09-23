<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
});

Route::get("/login","Users\UsersController@index");
Route::post("/login","Users\UsersController@login");
Route::post("/register","Users\UsersController@register");
Route::post("/register/previous","Users\UsersController@register_form");
Route::get("/home","Home\HomeController@index");
Route::get("/driver","Driver\DriverController@index");
Route::post("/driver","Driver\DriverController@store");
Route::get("/contact-us","ContactUs\ContactUsController@index");
Route::get('/logout', 'Users\UsersController@logout');
Route::get('/phone-auth', 'PhoneAuthController@index');

