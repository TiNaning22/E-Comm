@extends('layouts.main')

@section('content')

    <style>
        /* Body Background */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Container for Results */
        .container-result {
            max-width: 600px;
            width: 90%;
            background: rgba(248, 248, 248, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000000;
        }

        .result-details {
            margin: 20px 0;
            text-align: left;
            font-size: 16px;
        }

        .result-details p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .result-details p span {
            font-weight: bold;
        }

        /* Button Styles */

        a:hover {
            background-color: #0056b3;
        }

    </style>

    <div class="container-result">
        <h3>Hasil Tracking</h3>

        <div class="result-details">
            <p><span>Nomor Pesanan:</span> {{ $order['order_number'] }}</p>
            <p><span>Nomor Tracking:</span> {{ $order['tracking_number'] }}</p>
            <p><span>Status:</span> {{ $order['status'] }}</p>
            <p><span>Alamat Pengiriman:</span> {{ $order['shipping_address'] }}</p>
        </div>

        <a href="{{ route('tracking.index') }}">Kembali</a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    
@endsection
