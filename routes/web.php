<?php

use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SubscribeController;
// use App\Http\Controllers\OrderController;
// use App\Http\Controllers\PublicController;
use App\Http\Controllers\TrackingController;

 // web.php

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/', [PublicController::class,'home']);

Route::get('/produk/{category}', [PublicController::class, 'detailProduk'])->name('produk.by.category');

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

// Halaman Produk berdasarkan ID
Route::get('/produk/{id}', function ($id) {
    $produk = Produk::find($id); // Ambil produk berdasarkan ID
    return view('home.checkout', ['produk' => $produk]);
});

// Halaman Checkout
Route::get('/cekot', [CheckoutController::class, 'index'])->name('checkout.index'); // Halaman Checkout
Route::post('/cekot', [CheckoutController::class, 'process'])->name('checkout.store'); // Proses checkout
Route::get('/payment-success', [CheckoutController::class, 'success'])->name('home.payment.success'); // Halaman sukses pembayaran
Route::get('/order-history', [OrderController::class, 'index'])->name('order.history'); // Riwayat pesanan


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
// Route::get('/keranjang', [CartController::class, 'index'])->name('cart.index');


// Login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'authenticate']);


Route::get('/registrasi', function () {
    return view('auth.registrasi');
});

Route::get('/subcription', function () {
    return view('home.subs.subscription');
});

Route::get('/formsubs', [SubscribeController::class, 'showForm'])->name('form-subs');
Route::post('/form-subcription', [SubscribeController::class, 'store'])->name('subs-create');


Route::match(['put', 'patch'], '/profile', [ProfileController::class, 'update'])->name('profile.update');

// Route untuk data user
    Route::get('/data-user', [AdminUserController::class, 'index'])->name('dasboard.datauser.user');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::patch('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/destroy/{produkId}', [CartController::class, 'destroy'])->name('cart.destroy');

});

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

// Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
// Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.process');
// Route::get('/checkout/success', [CheckoutController::class, 'paymentSuccess'])->name('checkout.success');