<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'showSignin')->name('signin');
    Route::post('/login/authenticate', 'validateUser')->name('user-signin');

    Route::get('/signup', 'showSignup')->name('signup');
    Route::post('/registration', 'userRegister')->name('user-signup');
    
    Route::get('/user/logout', 'logout')->name('user-logout');
});

Route::get('/', [ProductController::class, 'home'])->name('home');


Route::get('/user/profile', [UserController::class, 'profile'])->name('profile');