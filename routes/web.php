<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

 Route::get('/home', function () {
     return view('home');
}); 

Route::get('/register', function () {
    return view('register');
});
Route::get('/viewpr', function () {
    return view('viewpr');
});
Route::get('/useracc', function () {
    return view('useracc');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/profileinfo', function () {
    return view('profileinfo');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/contact', function () {
    return view('contact');
}); 



//Route::middleware([
  //  'auth:sanctum',
  //  config('jetstream.auth_session'),
  //  'verified',
//])->group(function () {
  //  Route::get('/dashboard', function () {
    //    return view('dashboard');
    //})->name('dashboard');
//});
