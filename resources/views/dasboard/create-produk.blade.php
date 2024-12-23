@extends('layouts-dashboard.app')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Form Create Produk</h1>
    <form action="/produk/store" method="POST">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="mb-3">
            <label for="namaProduk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="NamaProduk" name="NamaProduk" placeholder="Masukkan nama produk" required>
        </div>
        
        <div class="mb-3">
            <label for="HargaProduk" class="form-label">Harga</label>
            <input type="number" class="form-control" id="HargaProduk" name="HargaProduk" placeholder="Masukkan harga produk" required>
        </div>

        <div class="mb-3">
            <label for="StokProduk" class="form-label">Stok</label>
            <input type="number" class="form-control" id="StokProduk" name="StokProduk" placeholder="Masukkan Stok produk" required>
        </div>


        <div class="mb-4">
            <label for="DeskripsiProduk" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="DeskripsiProduk" name="DeskripsiProduk" rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
        </div>

        <div class="input-group">
            <input type="file" class="form-control" id="Gambar" aria-describedby="Gambar" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="Gambar" name="Gambar">Button</button>
          </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection