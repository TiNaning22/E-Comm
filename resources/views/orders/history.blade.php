@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Pesanan Saya</h1>

        @if($orders->isEmpty())
            <p class="text-center">Belum ada pesanan.</p>
        @else
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Keterangan</th>
                        <th>Nomor Resi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->item_name }}</td>
                            <td>{{ $order->description }}</td>
                            <td>{{ $order->tracking_number }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a href="/" class="btn btn-primary mt-3">Kembali ke Beranda</a>
    </div>
</body>
</html>
@endsection
