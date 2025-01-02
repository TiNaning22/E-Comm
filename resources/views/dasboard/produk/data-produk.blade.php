@extends('layouts-dashboard.app')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga Produk</th>
                        <th>Stok Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Gambar</th>
                    </tr>
                    <tbody>
                        @foreach ($produk as $produk)
                        <tr>
                            <td>{{ $produk->NamaProduk }}</td>
                            <td>{{ $produk->Kategori }}</td>
                            <td>Rp {{ number_format($produk->HargaProduk, 0, ',', '.') }}</td>
                            <td>{{ $produk->StokProduk }}</td>
                            <td>{{ $produk->DeskripsiProduk }}</td>
                            <td><img src="{{ asset('storage/' . $produk->Gambar) }}" alt="{{ $produk->NamaProduk }}" width="50"></td>
                            <td>
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                    
            </table>
        </div>
    </div>
</div>
@endsection