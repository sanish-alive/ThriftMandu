<?php

use App\Http\Controllers\AdminController;
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

Route::controller(UserController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/product/{name}', 'productCard')->name('product-card');
});




Route::get('/user/profile', [UserController::class, 'profile'])->name('profile');

Route::prefix('/admin')->group(function() {
    Route::get('/login', function() {
        return view('admin.login');
    })->name('admin-login');

    Route::any('/', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/product/view/{name}', [AdminController::class, 'adminProductCard'])->name('admin-product-view');
    Route::get('/proudct/create', [ProductController::class, 'createProduct'])->name('create-product');
    Route::post('/product/store', [ProductController::class, 'storeProduct'])->name('store-product');

    Route::get('/user', [AdminController::class, 'userList'])->name('user-list');

    Route::get('/recommend', [AdminController::class, 'recommend'])->name('recommend');
    Route::get('/recommend/add/{id}', [AdminController::class, 'addRecommend'])->name('add-recommend');
});

