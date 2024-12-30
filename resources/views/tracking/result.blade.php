<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tracking</title>
</head>
<body>
    <h1>Hasil Tracking</h1>

    <p>Nomor Pesanan: {{ $order->order_number }}</p>
    <p>Nomor Tracking: {{ $order->tracking_number }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Alamat Pengiriman: {{ $order->shipping_address }}</p>

    <a href="{{ route('tracking.index') }}">Kembali</a>
</body>
</html>
