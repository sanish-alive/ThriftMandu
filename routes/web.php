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
    
    Route::get('/user/logout', 'logout')
    ->middleware('userAuth')
    ->name('user-logout');
});


Route::controller(UserController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/product/{name}', 'productCard')->name('product-card');
});




Route::get('/user/profile', [UserController::class, 'profile'])
->middleware('userAuth')
->name('profile');

Route::prefix('/admin')->group(function() {
    Route::get('/login', [AuthController::class, 'adminLogin'])->name('admin-login');
    Route::post('/login/validate', [AuthController::class, 'adminloginValidate'])->name('admin-login-validate');
    Route::get('/logout', [AuthController::class, 'adminLogout'])
    ->middleware('adminAuth')
    ->name('admin-logout');

    Route::any('/', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/product/view/{name}', [AdminController::class, 'adminProductCard'])
    ->middleware('adminAuth')
    ->name('admin-product-view');
    Route::get('/proudct/create', [ProductController::class, 'createProduct'])
    ->middleware('adminAuth')
    ->name('create-product');
    Route::post('/product/store', [ProductController::class, 'storeProduct'])
    ->middleware('adminAuth')
    ->name('store-product');
    Route::get('/product/delete/{id}', [ProductController::class, 'deleteProduct'])
    ->middleware('adminAuth')
    ->name('delete-product');

    Route::get('/user', [AdminController::class, 'userList'])->name('user-list');

    Route::get('/recommend', [AdminController::class, 'recommend'])->name('recommend');
    Route::get('/recommend/add/{id}', [AdminController::class, 'addRecommend'])->name('add-recommend');
    Route::get('/recommend/remove/{id}', [AdminController::class, 'removeRecommend'])->name('remove-recommend');
});

