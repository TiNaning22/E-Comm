@extends('layouts-dashboard.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-dark text-white text-center rounded-top">
                    <h3 class="mb-0 text-white">Tambah Produk</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Produk -->
                        <div class="form-group mb-4">
                            <label for="NamaProduk" class="form-label fw-bold">
                                <i class="bi bi-box-seam-fill text-dark me-2"></i>Nama Produk
                            </label>
                            <input type="text" name="NamaProduk" class="form-control border border-dark rounded-pill px-4" id="NamaProduk" placeholder="Masukkan nama produk" required>
                        </div>

                        <!-- Kategori -->
                        <div class="form-group mb-4">
                            <label for="Kategori" class="form-label fw-bold">
                                <i class="bi bi-tag-fill text-dark me-2"></i>Kategori
                            </label>
                            <select name="Kategori" class="form-control border border-dark rounded-pill px-4" id="Kategori" required>
                                <option value="">Pilih Kategori</option>
                                @foreach($kategori as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->Nama_Kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Harga Produk -->
                        <div class="form-group mb-4">
                            <label for="HargaProduk" class="form-label fw-bold">
                                <i class="bi bi-currency-dollar text-dark me-2"></i>Harga Produk
                            </label>
                            <input type="number" name="HargaProduk" class="form-control border border-dark rounded-pill px-4" id="HargaProduk" placeholder="Masukkan harga produk" required>
                        </div>

                        <!-- Stok Produk -->
                        <div class="form-group mb-4">
                            <label for="StokProduk" class="form-label fw-bold">
                                <i class="bi bi-archive-fill text-dark me-2"></i>Stok Produk
                            </label>
                            <input type="number" name="StokProduk" class="form-control border border-dark rounded-pill px-4" id="StokProduk" placeholder="Masukkan stok produk" required>
                        </div>

                        <!-- Deskripsi Produk -->
                        <div class="form-group mb-4">
                            <label for="DeskripsiProduk" class="form-label fw-bold">
                                <i class="bi bi-pencil-fill text-dark me-2"></i>Deskripsi Produk
                            </label>
                            <textarea name="DeskripsiProduk" class="form-control border border-dark rounded px-4 py-3" id="DeskripsiProduk" placeholder="Masukkan deskripsi produk" required></textarea>
                        </div>

                        <!-- Gambar -->
                        <div class="form-group mb-4">
                            <label for="Gambar" class="form-label fw-bold">
                                <i class="bi bi-image-fill text-dark me-2"></i>Gambar Produk
                            </label>
                            <input type="file" name="Gambar" class="form-control border border-dark rounded-pill px-4" id="Gambar" required>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-dark rounded-pill px-4">
                                <i class="bi bi-save2-fill me-2"></i>Simpan
                            </button>
                            <a href="{{ route('produk.index') }}" class="btn btn-secondary rounded-pill px-4">
                                <i class="bi bi-arrow-left-circle-fill me-2"></i>Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection