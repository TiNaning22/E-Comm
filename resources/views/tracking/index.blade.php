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
        flex-direction: column;
    }

    /* Main Content */
    .container-resi {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        background: rgba(248, 248, 248, 0.9);
        border-radius: 10px;
        margin-top: 10rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .container h1 {
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
        text-align: left;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>
<div class="container-resi">
    <h1>Tracking Pesanan Anda</h1>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('tracking.track') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tracking_number">Masukkan Nomor Tracking:</label>
            <input type="text" id="tracking_number" name="tracking_number" placeholder="Contoh: JNT1234567890" required>
        </div>
        <button type="submit">Lacak Pesanan</button>
    </form>
</div>

@endsection
