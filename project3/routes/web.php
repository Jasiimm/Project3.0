<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [ProductController::class, 'index'])->name('index');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/cart', [ProductController::class, 'showCart'])->name('cart.show');
Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::get('/update-cart', [ProductController::class, 'updateCart'])->name('update.cart');
Route::get('/remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('remove.from.cart');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

