@extends('layouts-dashboard.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="my-4">Tambah Kategori</h1>

            <!-- Form Tambah Kategori -->
            <form action="/kategori" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="Nama_Kategori" class="form-label">Nama Kategori</label>
                    <input type="text" name="Nama_Kategori" class="form-control" id="Nama_Kategori" required>
                </div>

                <div class="mb-3">
                    <label for="Deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="Deskripsi" class="form-control" id="Deskripsi"></textarea>
                </div>

                <div class="mb-3">
                    <label for="Gambar" class="form-label">Gambar</label>
                    <input type="file" name="Gambar" class="form-control" id="Gambar">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
