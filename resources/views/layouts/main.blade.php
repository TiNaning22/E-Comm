<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href={{ asset('css/css.css') }}>
    <title>Document</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg nav-bar">
    <div class="container">
      <a class="nav-bar" href="#">Briket
        <img src={{ asset('img/5880f3c1-4306-40b1-b50f-358fe39dbd6a.jpg') }} alt="Bootstrap" width="30" height="24">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link active" href="#tentang">Tentang Kami</a>
          <a class="nav-link active" href="#">Katalog</a>
          <a class="nav-link active" href="#">Kontak</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="content">
      @yield('content')
  </div>

     
  <section class="mt-auto">
      @include('layouts.footer')
  </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>