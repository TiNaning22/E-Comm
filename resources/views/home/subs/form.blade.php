@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 50%;">
        <h3 class="text-center mb-4">Form Pendaftaran Langganan</h3>
        
        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="/subscribe" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required value="{{ old('name') }}" />
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan alamat lengkap" required>{{ old('address') }}</textarea>
            </div>

            <!-- Metode Pembayaran -->
            <div class="mb-3">
                <label for="payment_method" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="payment_method" name="payment_method" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="kartu_kredit" id="payment_method" name="payment_method" {{ old('payment_method') == 'kartu_kredit' ? 'selected' : '' }}>Kartu Kredit</option>
                    <option value="transfer_bank" id="payment_method" name="payment_method" {{ old('payment_method') == 'transfer_bank' ? 'selected' : '' }}>Transfer Bank</option>
                </select>
            </div>

            <!-- Skala Pengiriman -->
            <div class="mb-3">
                <label for="scale" class="form-label">Jumlah Pengiriman</label>
                <select class="form-select" id="scale" name="scale" required>
                    <option value="">Pilih Jumlah Pengiriman</option>
                    <option value="kecil" id="scale" name="scale" {{ old('scale') == 'kecil' ? 'selected' : '' }}>Skala Kecil (1 hingga 10 Ton)</option>
                    <option value="besar" id="scale" name="scale" {{ old('scale') == 'besar' ? 'selected' : '' }}>Skala Besar (10 hingga 100 Ton)</option>
                </select>
            </div>

            <!-- Frekuensi Pengiriman -->
            <div class="mb-3">
                <label for="delivery_frequency" class="form-label">Frekuensi Pengiriman</label>
                <select class="form-select" id="delivery_frequency" name="delivery_frequency" required>
                    <option value="">Pilih Frekuensi Pengiriman</option>
                    <option value="harian" id="delivery_frequency" name="delivery_frequency" {{ old('delivery_frequency') == 'harian' ? 'selected' : '' }}>Harian</option>
                    <option value="mingguan" id="delivery_frequency" name="delivery_frequency" {{ old('delivery_frequency') == 'mingguan' ? 'selected' : '' }}>Mingguan</option>
                    <option value="bulanan" id="delivery_frequency" name="delivery_frequency" {{ old('delivery_frequency') == 'bulanan' ? 'selected' : '' }}>Bulanan</option>
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
