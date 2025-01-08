@extends('layouts-dashboard.app')

@section('content')
<h3>Detail Pengiriman</h3>

@if ($shippingDetail)
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Label</th>
                <th>Informasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Nomor Pesanan</strong></td>
                <td>{{ $shippingDetail->order_number }}</td>
            </tr>
            <tr>
                <td><strong>Nomor Tracking</strong></td>
                <td>{{ $shippingDetail->tracking_number }}</td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td>{{ $shippingDetail->status }}</td>
            </tr>
            <tr>
                <td><strong>Alamat Pengiriman</strong></td>
                <td>{{ $shippingDetail->shipping_address }}</td>
            </tr>
        </tbody>
    </table>
@else
    <p>Data pengiriman tidak ditemukan.</p>
@endif
@endsection
