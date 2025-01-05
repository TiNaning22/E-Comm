@extends('layouts.main')
@section('content')
<div class="mt-5">
    <div class="container m-auto">
        <br>
        <br>
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
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="1234 Jalan Utama" required>
                </div>
                <div class="form-group">
                    <label for="payment_method">Paymentmetohd</label>
                    <input type="text" name="payment_method" class="form-control" id="payment_method" placeholder="bank" required>
                </div>
                {{-- <div class="form-check">
                    <input type="radio" class="form-check-input" id="transferBank" name="payment_method" value="Transfer Bank" required>
                    <label class="form-check-label" for="transferBank">Transfer Bank</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="cod" name="payment_method" value="COD" required>
                    <label class="form-check-label" for="cod">Bayar di Tempat (COD)</label>
                </div> --}}
                <input type="hidden" name="action" value="save_address">
                <button type="submit" class="btn btn-secondary btn-lg btn-block mt-3">Simpan Alamat</button>
                <button type="submit" name="action" value="process_payment" class="btn btn-primary btn-lg btn-block mt-3">Bayar Sekarang</button>
            </form>
            
            
            <br>
            <br>
            <br>
        </div>
        </div>
    </div>
</div>
  @endsection