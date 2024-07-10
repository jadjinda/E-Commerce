<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [\App\Http\Controllers\AuthController::class, "login"]);

Route::get('/register', function (){
    return view('register');
});

Route::get('/forgot', function (){
    return view('forgotPass');
});

Route::get('/data', function (){
    return view('data');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/shop', function (){
    return view('shop');
});

Route::get('/furniture', function (){
    return view('furniture');
});

Route::get('/contact', function (){
    return view('contact');
});
