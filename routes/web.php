<?php

use App\Models\Wishlist;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wishlist\IndexController as WishlistIndexController;
use App\Http\Controllers\Wishlist\StoreController as WishlistStoreController;
use App\Http\Controllers\Wishlist\UpdateController as WishlistUpdateController;
use App\Http\Controllers\Wishlist\DestroyController as WishlistDestroyController;

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

Route::group([], function() {
    Route::get('/', WishlistIndexController::class)->name('index');
    Route::post('/', WishlistStoreController::class)->name('store');
    Route::patch('/{wishlist}', WishlistUpdateController::class)->name('update');
    Route::delete('/{wishlist}', WishlistDestroyController::class)->name('delete');
});
