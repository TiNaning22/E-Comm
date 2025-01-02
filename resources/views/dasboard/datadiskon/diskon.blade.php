@extends('layouts-dashboard.app')

@section('content')
<div class="container mt-4">
    <h1>Data Diskon</h1>
    <a href="{{ route('dasboard.datadiskon.create') }}" class="btn btn-primary mb-3">Tambah Diskon</a>

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
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada diskon.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
