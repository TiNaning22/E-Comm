@extends('layouts-dashboard.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Edit Kategori</h1>

            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="Nama_Kategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="Nama_Kategori" name="Nama_Kategori" value="{{ old('Nama_Kategori', $kategori->Nama_Kategori) }}" required>
                </div>

                <div class="mb-3">
                    <label for="Deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3">{{ old('Deskripsi', $kategori->Deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="Gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="Gambar" name="Gambar">
                    @if($kategori->image)
                        <img src="{{ asset('storage/' . $kategori->image) }}" alt="Current Image" class="mt-2" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Kategori</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection