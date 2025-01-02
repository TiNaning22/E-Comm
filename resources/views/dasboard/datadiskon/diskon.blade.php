@extends('layouts-dashboard.app')

@section('content')
<div class="container mt-4">
    <h1>Data Diskon</h1>
    <a href="diskon/create" class="btn btn-primary mb-3">Tambah Diskon</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Persentase</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($discounts as $discount)
            <tr>
                <td>{{ $discount->id }}</td>
                <td>{{ $discount->name }}</td>
                <td>{{ $discount->percentage }}%</td>
                <td>{{ $discount->start_date }}</td>
                <td>{{ $discount->end_date }}</td>
                <td>
                    <!-- Tombol Edit -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $discount->id }}">Edit</button>

                    <!-- Tombol Hapus -->
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $discount->id }}">Hapus</button>
                </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal{{ $discount->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $discount->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $discount->id }}">Edit Diskon</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('diskon.update', $discount->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Diskon</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $discount->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="percentage" class="form-label">Persentase Diskon (%)</label>
                                    <input type="number" class="form-control" id="percentage" name="percentage" value="{{ $discount->percentage }}" min="0" max="100" required>
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $discount->start_date }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">Tanggal Berakhir</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $discount->end_date }}" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Delete -->
            <div class="modal fade" id="deleteModal{{ $discount->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $discount->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $discount->id }}">Hapus Diskon</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus diskon "{{ $discount->name }}"?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <form action="{{ route('diskon.destroy', $discount->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada diskon.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
