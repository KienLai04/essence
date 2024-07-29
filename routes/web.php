<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('product-detail/{id}', [ProductController::class, 'showProduct'])->name('product-detail');
Route::get('category/{id}', [ProductController::class, 'showProductByCategory'])->name('category');
Route::get('search', [ProductController::class, 'search'])->name('search');
// Route::get('/cart', [ProductController::class, 'showCart'])->name('cart');
// Route::post('/cart/add', [ProductController::class, 'add'])->name('cart.add');
// Route::post('/cart/remove', [ProductController::class, 'remove'])->name('cart.remove');


Route::get('/login',[UserController::class,'loginForm'])->name('loginForm');
Route::post('/login', [UserController::class,'login'])->name('login');
Route::get('register', [UserController::class, 'registerForm'])->name('registerForm');
Route::post('register', [UserController::class, 'register'])->name('register');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::group(['prefix' => 'admin' ], function () {
    Route::get('login', [AdminController::class, 'loginForm'])->name('loginFormAdmin');
    Route::post('login', [AdminController::class, 'login'])->name('loginAdmin');
    Route::get('logout', [AdminController::class, 'logout'])->name('logoutAdmin');
});

Route::group(['prefix' => 'admin', 'middleware' => [AdminMiddleware::class]], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('category', AdminCategoryController::class);
    Route::resource('product', AdminProductController::class);
});


