@extends('layouts-dashboard.app') <!-- Sesuaikan dengan layout -->

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg border-0" style="max-width: 800px; width: 100%;"> <!-- Lebar diperbesar -->
        <div class="card-header text-center bg-dark text-white">
            <h2 class="fw-bold text-white">Edit Produk</h2>
        </div>
        <div class="card-body p-5">
            <p class="text-center text-muted mb-4">Perbarui informasi produk Anda dengan mudah.</p>

            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama Produk -->
                <div class="mb-3">
                    <label for="NamaProduk" class="form-label fw-semibold">Nama Produk</label>
                    <input 
                        type="text" 
                        class="form-control border border-dark rounded-3 @error('NamaProduk') is-invalid @enderror" 
                        id="NamaProduk" 
                        name="NamaProduk" 
                        value="{{ old('NamaProduk', $produk->NamaProduk) }}" 
                        placeholder="Masukkan nama produk" 
                        required>
                    @error('NamaProduk')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label for="Kategori" class="form-label fw-semibold">Kategori</label>
                    <input 
                        type="text" 
                        class="form-control border border-dark rounded-3 @error('Kategori') is-invalid @enderror" 
                        id="Kategori" 
                        name="Kategori" 
                        value="{{ old('Kategori', $produk->Kategori) }}" 
                        placeholder="Masukkan kategori produk" 
                        required>
                    @error('Kategori')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Harga Produk -->
                <div class="mb-3">
                    <label for="HargaProduk" class="form-label fw-semibold">Harga Produk</label>
                    <input 
                        type="number" 
                        class="form-control border border-dark rounded-3 @error('HargaProduk') is-invalid @enderror" 
                        id="HargaProduk" 
                        name="HargaProduk" 
                        value="{{ old('HargaProduk', $produk->HargaProduk) }}" 
                        placeholder="Masukkan harga produk" 
                        required>
                    @error('HargaProduk')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Stok Produk -->
                <div class="mb-3">
                    <label for="StokProduk" class="form-label fw-semibold">Stok Produk</label>
                    <input 
                        type="number" 
                        class="form-control border border-dark rounded-3 @error('StokProduk') is-invalid @enderror" 
                        id="StokProduk" 
                        name="StokProduk" 
                        value="{{ old('StokProduk', $produk->StokProduk) }}" 
                        placeholder="Masukkan jumlah stok" 
                        required>
                    @error('StokProduk')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Deskripsi Produk -->
                <div class="mb-3">
                    <label for="DeskripsiProduk" class="form-label fw-semibold">Deskripsi Produk</label>
                    <textarea 
                        class="form-control border border-dark rounded-3 @error('DeskripsiProduk') is-invalid @enderror" 
                        id="DeskripsiProduk" 
                        name="DeskripsiProduk" 
                        rows="4" 
                        placeholder="Tuliskan deskripsi produk" 
                        required>{{ old('DeskripsiProduk', $produk->DeskripsiProduk) }}</textarea>
                    @error('DeskripsiProduk')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label for="Gambar" class="form-label fw-semibold">Gambar Produk</label>
                    <input 
                        type="file" 
                        class="form-control border border-dark rounded-3 @error('Gambar') is-invalid @enderror" 
                        id="Gambar" 
                        name="Gambar">
                    <small class="text-muted">* Kosongkan jika tidak ingin mengganti gambar.</small>
                    @error('Gambar')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('produk.index') }}" class="btn btn-outline-secondary px-4 rounded-3">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-dark px-4 rounded-3">
                        <i class="bi bi-save"></i> Update Produk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection
