@extends('layouts-dashboard.app')
@section('content')
<div class="container mt-4">
    <h1>Data Subscribe</h1>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Jumlah Pengiriman</th>
                <th>Frekuensi Pengiriman</th>
            </tr>
        </thead>
        <tbody>
            @forelse($subscriptions as $subs)
            <tr>
                <td>{{ $subs->id }}</td>
                <td>{{ $subs->name }}</td>
                <td>{{ $subs->email }}</td>
                <td>{{ $subs->address }}</td>
                <td>{{ $subs->scale }}</td>
                <td>{{ $subs->delivery_frequency }}</td>
        
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data pengguna.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection