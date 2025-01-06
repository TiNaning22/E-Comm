@extends('layouts-dashboard.app')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
    <p class="mb-4">Daftar semua produk yang tersedia.</p>

    <div class="card shadow mb-4" style="background-color: transparent; border: none;">
        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #f8f9fa;">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Produk</h6>
            <a href="{{ route('produk.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Produk
            </a>
        </div>
        <div class="card-body" style="background-color: transparent;">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga Produk</th>
                            <th>Stok Produk</th>
                            <th>Deskripsi Produk</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $item)
                        <tr>
                            <td>{{ $item->NamaProduk }}</td>
                          
                            <td>{{ $item->Nama_Kategori }}</td>
                                
                            <td>Rp {{ number_format($item->HargaProduk, 0, ',', '.') }}</td>
                            <td>{{ $item->StokProduk }}</td>
                            <td>{{ Str::limit($item->DeskripsiProduk, 50) }}</td>
                            <td>
                                @if($item->Gambar)
                                    <img src="{{ asset('storage/' . $item->Gambar) }}" alt="{{ $item->NamaProduk }}" width="50" height="50" class="img-thumbnail">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endpush