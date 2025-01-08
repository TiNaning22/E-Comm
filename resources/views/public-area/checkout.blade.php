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
                @foreach ($products as $produk)
                    
                
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $produk->Gambar) }}" class="card-img" alt="{{ $produk->NamaProduk }}">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $produk->NamaProduk }}</h5>
                    <p class="card-text">{{ $produk->DeskripsiProduk }}</p>
                    <p class="card-text"><strong>Rp {{ number_format($produk->HargaProduk, 0, ',', '.') }}</strong></p>
                </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
        <!-- Formulir Pembayaran -->
        <div class="col-md-6">
            <h4 class="mb-3">Informasi Pengiriman</h4>
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
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
                
                <!-- Kode Voucher -->
                <div class="form-group">
                    <label for="voucher_code">Kode Voucher (Opsional)</label>
                    <input type="text" class="form-control" id="voucher_code" name="voucher_code" placeholder="Masukkan kode voucher">
                    {{-- @if ($discount)
                    <div class="alert alert-info mt-2">
                        Potongan Harga: Rp {{ number_format($discountAmount, 0) }}
                    </div>
                    @endif --}}
                </div>

                <!-- Metode Pembayaran -->
                <h4 class="mt-4 mb-3">Metode Pembayaran</h4>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="transferBank" name="payment_method" required>
                    <label class="form-check-label" for="transferBank">Transfer Bank</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="cod" name="payment_method" required>
                    <label class="form-check-label" for="cod">Bayar di Tempat (COD)</label>
                </div>

                <!-- Total Harga -->
               
@endsection