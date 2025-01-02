@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 50%;">
        <h3 class="text-center mb-4">Form Pendaftaran</h3>
        <form>
            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required />
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>

            <!-- Metode Pembayaran -->
            <div class="mb-3">
                <label for="payment_method" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="payment_method" name="payment_method" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="kartu_kredit">Kartu Kredit</option>
                    <option value="transfer_bank">Transfer Bank</option>
                </select>
            </div>

            <!-- Skala Kecil atau Besar -->
            <div class="mb-3">
                <label for="scale" class="form-label">Jumblah Pengiriman</label>
                <select class="form-select" id="scale" name="scale" required>
                    <option value="">Pilih Jumblah Peniriman</option>
                    <option value="kecil">Skala Kecil (1 hingga 10 Ton)</option>
                    <option value="besar">Skala Besar (10 hingga 100 Ton)</option>
                </select>
            </div>

            <!-- Frekuensi Pengiriman -->
            <div class="mb-3">
                <label for="delivery_frequency" class="form-label">Frekuensi Pengiriman</label>
                <select class="form-select" id="delivery_frequency" name="delivery_frequency" required>
                    <option value="">Pilih Frekuensi Pengiriman</option>
                    <option value="harian">Harian</option>
                    <option value="mingguan">Mingguan</option>
                    <option value="bulanan">Bulanan</option>
                </select>
            </div>

            <!-- Tombol Submit -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </form>
    </div>
</div>
@endsection
