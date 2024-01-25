<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/index', [ProductController::class, 'getIndex'])->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/menu', function () {
    return view('menu');
})->name('menu');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
