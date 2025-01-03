@extends('layouts-dashboard.app') <!-- Ganti dengan layout yang sesuai -->

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5 fw-bold">Edit Produk</h1>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Menggunakan metode PUT untuk update -->
                
                <div class="mb-3">
                    <label for="NamaProduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="NamaProduk" name="NamaProduk" value="{{ old('NamaProduk', $produk->NamaProduk) }}" required>
                </div>

                <div class="mb-3">
                    <label for="Kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="Kategori" name="Kategori" value="{{ old('Kategori', $produk->Kategori) }}" required>
                </div>

                <div class="mb-3">
                    <label for="HargaProduk" class="form-label">Harga Produk</label>
                    <input type="number" class="form-control" id="HargaProduk" name="HargaProduk" value="{{ old('HargaProduk', $produk->HargaProduk) }}" required>
                </div>

                <div class="mb-3">
                    <label for="StokProduk" class="form-label">Stok Produk</label>
                    <input type="number" class="form-control" id="StokProduk" name="StokProduk" value="{{ old('StokProduk', $produk->StokProduk) }}" required>
                </div>

                <div class="mb-4">
                    <label for="DeskripsiProduk" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control" id="DeskripsiProduk" name="DeskripsiProduk" rows="4" required>{{ old('DeskripsiProduk', $produk->DeskripsiProduk) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="Gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="Gambar" name="Gambar">
                    <small class="text-muted">* Kosongkan jika tidak ingin mengganti gambar.</small>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary px-4 py-2">Update Produk</button>
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary px-4 py-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
