@extends('layouts-dashboard.app')

@section('content')
<div class="container">
    <h1>Detail Pengiriman</h1>
    <p>Kurir: {{ $pengiriman['kurir'] }}</p>
<p>Nomor Resi: {{ $pengiriman['resi'] }}</p>
<p>Status: {{ $pengiriman['status'] }}</p>
<p>Estimasi: {{ $pengiriman['estimasi'] }}</p>

    <h2>Status Pengiriman</h2>
    <p>{{ $pengiriman['status'] }}</p>
</div>
@endsection
