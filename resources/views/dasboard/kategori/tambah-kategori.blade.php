@extends('layouts-dashboard.app')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-dark text-white text-center rounded-top">
                    <h3 class="mb-0 text-white">Tambah Kategori</h3>
                </div>
                <div class="card-body p-5">
                    <!-- Form Tambah Kategori -->
                    <form action="/kategori" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Kategori -->
                        <div class="form-group mb-4">
                            <label for="Nama_Kategori" class="form-label fw-bold">
                                <i class="bi bi-tag-fill text-dark me-2"></i>Nama Kategori
                            </label>
                            <input type="text" name="Nama_Kategori" class="form-control border border-dark rounded-pill px-4" id="Nama_Kategori" placeholder="Masukkan nama kategori" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="form-group mb-4">
                            <label for="Deskripsi" class="form-label fw-bold">
                                <i class="bi bi-pencil-fill text-dark me-2"></i>Deskripsi
                            </label>
                            <textarea name="Deskripsi" class="form-control border border-dark rounded px-4 py-3" id="Deskripsi" placeholder="Masukkan deskripsi kategori"></textarea>
                        </div>

                        <!-- Gambar -->
                        <div class="form-group mb-4">
                            <label for="Gambar" class="form-label fw-bold">
                                <i class="bi bi-image-fill text-dark me-2"></i>Gambar
                            </label>
                            <input type="file" name="Gambar" class="form-control border border-dark rounded-pill px-4" id="Gambar">
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-dark rounded-pill px-4">
                                <i class="bi bi-save2-fill me-2"></i>Simpan
                            </button>
                            <a href="#" class="btn btn-secondary rounded-pill px-4">
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
