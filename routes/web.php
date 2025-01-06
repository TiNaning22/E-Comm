<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TrackingController;

 


Route::get('/', [PublicController::class,'home']);

Route::get('/produk-utama', [PublicController::class, 'produkUtamaShow'])->name('produk');
Route::get('/layanan', [PublicController::class, 'produkLayananShow']);
Route::get('/bahan-bakar', [PublicController::class, 'bahanBakarShow']);
Route::get('/paket-spesial', [PublicController::class, 'paketSpesialShow']);
Route::get('/alat-aksesoris', [PublicController::class, 'alatAksesorisShow']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

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

Route::get('/cekot/{id}', function ($id) {
    $produk = Produk::find($id); // Ambil produk berdasarkan ID
    return view('home.checkout', ['produk' => $produk]);
});

Route::post('/cekot', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/payment', [CheckoutController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment-success', [CheckoutController::class, 'paymentSuccess'])->name('home.payment.success');
Route::get('/order-history', [OrderController::class, 'index'])->name('order.history');

Route::resource('/produk', ProdukController::class);

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
Route::get('/keranjang', [CartController::class, 'index']);
Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');

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
    Route::get('/detail-transaksi', [PenjualanController::class, 'detailTransaksi'])->name('penjualan.detailTransaksi');
    Route::get('/detail-alamat', [PenjualanController::class, 'detailAlamat'])->name('penjualan.detailAlamat');
    Route::get('/detail-pengiriman', [PenjualanController::class, 'detailPengiriman'])->name('penjualan.detail-pengiriman');

// Route::get('penjualan/detail-pengiriman', [PenjualanController::class, 'detailPengiriman'])->name('penjualan.detailPengiriman');
Route::prefix('dasboard')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dasboard.dashboard');
});

// kontka awal

Route::get('/kontak', function () {
    return view('home.kontak.kontak');
});

// kontak ahir
Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking.index');
Route::post('/tracking', [TrackingController::class, 'track'])->name('tracking.track');
