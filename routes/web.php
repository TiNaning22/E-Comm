<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])->middleware('auth')->name('verification.notice');
// Route::post('/email/verification-notification', [VerificationController::class, 'sendVerificationEmail'])
//     ->middleware('auth')
//     ->name('verification.send');

require __DIR__.'/auth.php';


Route::get('/cekot', function () {
    return view('home.checkout');
});


// Route untuk kategori

    Route::resource('/kategori', KategoriController::class);

    // Route::get('/tampilan-kategori', [CategoryController::class, 'index'])->name('categories.index');
    // Route::get('/buat-kategori', [CategoryController::class, 'create'])->name('categories.create');
    // // Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    // // Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    // // Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    // // Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// Route untuk menampilkan form login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Route untuk memproses login
Route::post('/login', [AuthenticatedSessionController::class, 'authenticate']);


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

