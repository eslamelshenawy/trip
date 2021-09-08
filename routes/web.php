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
Route::get("/home","Home\HomeController@index");
Route::get("/driver","Driver\DriverController@index");
Route::get("/contact-us","ContactUs\ContactUsController@index");

