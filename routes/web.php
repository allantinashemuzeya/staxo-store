<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(StoreController::class)->group(function(){
    Route::get('/', 'index')->name('store-home');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index')->middleware(['auth'])->name('products');
    Route::get('/product/{slug}', 'productDetails')->name('product');
});




require __DIR__.'/auth.php';
