<?php
use Illuminate\Support\Facades\Route;

#Route::middleware("auth")->group(function (){});

Route::get('/', function () {
    return view('pages.welcome');
})->name("welcome");

Route::get('/login', [\App\Http\Controllers\AuthController::class, "login"])
    ->name("login");

Route::post('/login', [\App\Http\Controllers\AuthController::class, "loginPost"])
    ->name("login.post");

Route::get('/register', [\App\Http\Controllers\AuthController::class, "register"])
    ->name("register");

Route::post('/register', [\App\Http\Controllers\AuthController::class, "registerPost"])
    ->name("register.post");


Route::get('/forgot', function (){
    return view('auth.forgotPass');
});

Route::get('/data', function (){
    return view('pages.data');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::get('/shop', function (){
    return view('pages.shop');
});

Route::get('/furniture', function (){
    return view('pages.furniture');
});

Route::get('/contact', function (){
    return view('pages.contact');
});
