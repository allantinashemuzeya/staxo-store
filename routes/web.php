<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return to_route('store-home');
});

Route::get('/dashboard', function () {
    return to_route('store-home');
})->middleware(['auth'])->name('dashboard');

Route::controller(StoreController::class)->group(function(){
    Route::get('/', 'index')->name('store-home');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/placeOrder', 'placeOrder')->name('placeOrder');
    Route::get('/success', 'checkout')->name('success');
    Route::get('/cancel', 'checkout')->name('cancel');
});

Route::get('/stripe', [StripeController::class, 'stripe']);
Route::post('/stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index')->middleware(['auth'])->name('products');
    Route::get('/product/{slug}', 'productDetails')->name('product');
});




require __DIR__.'/auth.php';
