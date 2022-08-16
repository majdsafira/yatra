<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\UserController;



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


//home
 Route::resource('tours', ToursController::class);


Route::get('/tourdetails', function () {
    return view('tourdetails');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/tourgrid', function () {
    return view('tourgrid');
});




// admin route

Route::resource('users', UserController::class);

Route::get('adminLogin', 'App\Http\Controllers\AdminController@login');
Route::get('/loginad', 'App\Http\Controllers\AdminController@authLogin')->name('login-auth');
Route::get('/loginout', 'App\Http\Controllers\AdminController@logout')->name('logout');
Route::get('dash', 'App\Http\Controllers\AdminController@viewDash');
Route::resource('admin', AdminController::class);


