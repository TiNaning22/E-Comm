@extends('layouts-dashboard.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Kategori Produk</h1>

            <!-- Tombol Tambah Kategori -->
            <a href="kategori/create" class="btn btn-primary mb-3">Tambah Kategori</a>

            <!-- Tabel Kategori -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $key => $category)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $category->Nama_Kategori }}</td>
                            <td>{{ $category->Deskripsi }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $category->Gambar) }}" alt="{{ $category->Nama_Kategori }}" width="50" height="50">
                            </td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href={{ route('kategori.edit', $category->id) }} class="btn btn-warning btn-sm">Edit</a>
                                <!-- Tombol Hapus -->
                                <form action="{{ route('kategori.destroy', $category->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kategori ini?');">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        {{-- <div class="modal fade" id="editModal{{ $category->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Kategori</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('kategori.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="Nama_Kategori" class="form-label">Nama Kategori</label>
                                                <input type="text" class="form-control" id="Nama_Kategori" name="Nama_Kategori" value="{{ $category->Nama_Kategori }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="Deskripsi" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3" required>{{ $category->Deskripsi }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Gambar</label>
                                                <input type="file" class="form-control" id="image" name="image">
                                                <img src="{{ asset('storage/' . $category->image) }}" alt="Preview" class="mt-2" width="100">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
