<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tracking</title>
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
        }

        /* Container */
        .container-result {
            max-width: 600px;
            width: 90%;
            background: rgba(248, 248, 248, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }

        .result-details {
            margin: 20px 0;
            text-align: left;
        }

        .result-details p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
        }

        .result-details p span {
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container-result">
        <h1>Hasil Tracking</h1>

        <div class="result-details">
            <p><span>Nomor Pesanan:</span> {{ $order['order_number'] }}</p>
            <p><span>Nomor Tracking:</span> {{ $order['tracking_number'] }}</p>
            <p><span>Status:</span> {{ $order['status'] }}</p>
            <p><span>Alamat Pengiriman:</span> {{ $order['shipping_address'] }}</p>
        </div>

        <a href="{{ route('tracking.index') }}">Kembali</a>
    </div>
</body>
</html>
