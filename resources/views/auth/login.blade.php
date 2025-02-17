<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url('{{ asset('img/white_background_image.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
        .auth-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .auth-header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-header">
            <h3>Login</h3>
        </div>

        <!-- Alert untuk error -->
        @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

        <!-- Alert untuk kredensial tidak valid -->
        @if(session('invalid_credentials'))
            <div class="alert alert-danger text-center">
                {{ session('invalid_credentials') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
            <p class="text-center">Belum punya akun? <a href="/register">Daftar</a></p>
        </form>
    </div>
</body>
</html>
