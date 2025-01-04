<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000; /* Hitam */
            color: #fff; /* Putih */
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #333;
            border-radius: 10px;
            background: linear-gradient(145deg, #1a1a1a, #333);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1rem;
        }

        .btn {
            width: 100%;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #fff;
            color: #000;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ccc;
            color: #000;
        }

        .btn-secondary {
            background-color: #555;
            color: #fff;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #777;
            color: #fff;
        }

        .payment-option {
            margin: 20px 0;
            padding: 20px;
            background-color: #222;
            border-radius: 10px;
            text-align: center;
        }

        .payment-option img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 10px;
        }

        .payment-option h4 {
            color: #fff;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="text-white">Pembayaran Berhasil!</h1>
        <p>Terima kasih telah berbelanja dengan kami. Silakan lanjutkan pembayaran menggunakan metode berikut:</p>
        
        <!-- BRIVA Section -->
        <div class="payment-option">
            <h4>Metode Pembayaran: BRIVA</h4>
            <p class="text-white">Nomor Virtual Account:</p>
            <h3 class="text-warning">1234 5678 9123 4567</h3>
            <p>Silakan lakukan pembayaran melalui ATM, Mobile Banking, atau Internet Banking.</p>
        </div>

        <!-- QRIS Section -->
        <div class="payment-option">
            <h4>Metode Pembayaran: QRIS</h4>
            <img src="https://via.placeholder.com/200x200.png?text=QR+Code" alt="QRIS Code">
            <p>Scan kode QR di atas menggunakan aplikasi e-wallet Anda untuk melakukan pembayaran.</p>
        </div>

        <!-- Button Section -->
        <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
        <a href="{{ route('order.history') }}" class="btn btn-secondary">Pesanan Saya</a>
    </div>
</body>
</html>
