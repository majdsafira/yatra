<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;



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
 Route::resource('home', HomeController::class);
 Route::get('tourgrid', 'App\Http\Controllers\ToursController@viewtour');
 Route::get('/tourdetails/{tours}', [ToursController::class,'show']);
 Route::post('/toggle/{id}', 'App\Http\Controllers\BookController@toggle')->name('toggle');




Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/booking', function () {
    return view('booking');
});

Route::get('/profile', function () {
    return view('profile');
});


// login
Route::resource('/login', LoginController::class);
Route::post('postLogin', [LoginController::class, 'postLogin']);
Route::get('signup', [LoginController::class, 'registration']);
Route::post('register', [LoginController::class, 'register']);



// admin route
Route::resource('admin', AdminController::class);
Route::resource('users', UserController::class);
Route::resource('tours', ToursController::class);
Route::resource('cases', BookController::class);


Route::get('adminLogin', 'App\Http\Controllers\AdminController@login');
Route::get('/loginad', 'App\Http\Controllers\AdminController@authLogin')->name('login-auth');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
Route::get('dash', 'App\Http\Controllers\AdminController@viewDash');


Route::post('book-now', [BookController::class, 'bookNow']);

