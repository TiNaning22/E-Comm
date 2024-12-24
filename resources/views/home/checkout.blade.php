@extends('layouts.main')
@section('content')
<div class="mt-5">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Checkout</h2>

        <!-- Row Utama -->
        <div class="row">
        <!-- Gambar Produk -->
        <div class="col-md-6">
            <h4 class="mb-3">Produk</h4>
            <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="card-img" alt="Produk 1">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Produk 1</h5>
                    <p class="card-text">Deskripsi singkat tentang produk yang dibeli.</p>
                    <p class="card-text"><strong>Rp 100.000</strong></p>
                </div>
                </div>
            </div>
            </div>

            <!-- Produk Tambahan -->
            <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="card-img" alt="Produk 2">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Produk 2</h5>
                    <p class="card-text">Deskripsi singkat tentang produk tambahan.</p>
                    <p class="card-text"><strong>Rp 50.000</strong></p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Formulir Pembayaran -->
        <div class="col-md-6">
            <h4 class="mb-3">Informasi Pengiriman</h4>
            <form>
            <!-- Nama Lengkap -->
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
            </div>

            <!-- Alamat -->
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="1234 Jalan Utama" required>
            </div>

            <!-- Metode Pembayaran -->
            <h4 class="mt-4 mb-3">Metode Pembayaran</h4>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="transferBank" name="paymentMethod" required>
                <label class="form-check-label" for="transferBank">Transfer Bank</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="cod" name="paymentMethod" required>
                <label class="form-check-label" for="cod">Bayar di Tempat (COD)</label>
            </div>

            <!-- Total Harga -->
            <hr class="my-4">
            <h5>Total: <strong>Rp 170.000</strong></h5>

            <!-- Tombol Checkout -->
            <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Bayar Sekarang</button>
            </form>
        </div>
        </div>
    </div>
</div>
  @endsection