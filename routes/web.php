<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\ClientController;


Route::prefix('/admin')->namespace('App\\Http\\Controllers\\Admin')-> group (function(){
    Route::get('/login', [AdminController::class, 'login']);
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/add_product', [AdminController::class, 'add_product']);
    Route::get('/product', [ProductController::class, 'index']);
    Route::post('save_product', [ProductController::class, 'store'])->name('store');
    Route::resource('edit_product', ProductController::class);
    Route::post('update_product/{id}', [ProductController::class, 'update'])->name('update');

});



Route::resource('index', ClientController::class);
Route::get('/index', [ClientController::class, 'index']);
Route::get('/', [ClientController::class, 'index']);
Route::get('/services', [ClientController::class, 'services']);
Route::get('/about_us', [ClientController::class, 'aboutus']);
Route::get('/contact_us', [ClientController::class, 'contactus']);
Route::get('/privacy', [ClientController::class, 'privacy']);
Route::get('/product/{slug}', [ClientController::class, 'product'])->name('product');
Route::get('/signin', [ClientController::class, 'login']);
Route::get('/register', [ClientController::class, 'login']);
Route::get('/terms', [ClientController::class, 'terms']);