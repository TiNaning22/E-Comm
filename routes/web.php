<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/dashboard', function () {
    return view('dasboard.data-produk');
});



Route::get('/cekot', function () {
    return view('home.checkout');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/registrasi', function () {
    return view('auth.registrasi');
});



route::resource('/keranjang', CartController::class);

Route::get('/produk', function () {
    return view('home.produk-utama');
});


// Route::middleware(['auth'])->group(function () {
//     Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
//     Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
//     Route::patch('/cart/{cart}', [CartController::class, 'update'])->name('cart.update');
//     Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
// });
