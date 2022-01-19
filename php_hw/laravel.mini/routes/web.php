<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


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
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/category/{cat}', [ProductController::class, 'getCategory'])->name('getCategory');
Route::get('/category/{cat}/{product_id}', [ProductController::class, 'getProduct'])->name('getProduct');
Route::post('/cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::post('/cart/remove', [CartController::class, 'clearCart'])->name('clearCart');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/order/add', [OrderController::class, 'saveOrder'])->name('addOrder');

Route::group(['middleware' => ['auth','admin']], function() {
// только для админа
    Route::get('/admin/orders', [OrderController::class, 'getOrders'])->name('orders');
});

Route::group(['middleware' => ['auth']], function() {
// только для пользователя авторизованного
    Route::get('/profile', [AuthController::class, 'index'])->name('profile.index');
});

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

