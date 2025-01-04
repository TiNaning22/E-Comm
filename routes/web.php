<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AdminDiscountController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SubscribeController;

Route::get('/', function () {
    return view('home.home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile-user', [ProfileController::class,'index']);
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
})->name('checkout.view');


Route::post('/cekot', [CheckoutController::class, 'store'])->name('checkout.store');

// Route::get('/das-data-produk', function () {
//     return view('dasboard.produk.data-produk');
// });

// Route untuk kategori
Route::resource('/kategori', KategoriController::class);

//diskon
Route::resource('diskon', AdminDiscountController::class);

//produk
Route::resource('/produk', ProdukController::class);

//keranjang
route::resource('/keranjang', CartController::class);

// Login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'authenticate']);


Route::get('/registrasi', function () {
    return view('auth.registrasi');
});

// Route::get('/produk', function () {
//     return view('home.produk-utama');
// });

Route::match(['put', 'patch'], '/profile', [ProfileController::class, 'update'])->name('profile.update');

// Route untuk data user
    Route::get('/data-user', [AdminUserController::class, 'index'])->name('dasboard.datauser.user');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
//     Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
//     Route::patch('/cart/{cart}', [CartController::class, 'update'])->name('cart.update');
//     Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
// });

//Penjualan
Route::prefix('penjualan')->group(function () {
    Route::get('detail-transaksi', [PenjualanController::class, 'detailTransaksi'])->name('penjualan.detailTransaksi');
    Route::get('detail-alamat', [PenjualanController::class, 'detailAlamat'])->name('penjualan.detailAlamat');
    Route::get('/detail-pengiriman', [PenjualanController::class, 'detailPengiriman'])->name('penjualan.detail-pengiriman');
});
// Route::get('penjualan/detail-pengiriman', [PenjualanController::class, 'detailPengiriman'])->name('penjualan.detailPengiriman');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dasboard.dashboard');

// Rute Subscribe
Route::get('/subscribe', [SubscribeController::class, 'showForm'])->name('subscribe.form');
Route::get('/subs', [SubscribeController::class, 'showData'])->name('subscribe.data');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');

// subcribe ahir