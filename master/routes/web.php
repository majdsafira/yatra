<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToursController;


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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/tourdetails', function () {
    return view('tourdetails');
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

Route::resource('/', ToursController::class);
