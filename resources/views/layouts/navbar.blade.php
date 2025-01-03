<nav class="navbar navbar-expand-lg nav-bar">  
  <div class="container">  
    <a class="nav-bar" href="#home">Briket  
      <img src={{ asset('img/5880f3c1-4306-40b1-b50f-358fe39dbd6a.jpg') }} alt="Bootstrap" width="30" height="24">  
    </a>  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">  
      <span class="navbar-toggler-icon"></span>  
    </button>  
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">  
      <div class="navbar me-auto"> <!-- Mengganti ms-auto menjadi me-auto untuk memindahkan ke kiri -->
        <a class="nav-link active" aria-current="page" href="/">Home</a>  
        <a class="nav-link active" href="#tentang">Tentang Kami</a>  
        <a class="nav-link active" href="#katalog">Katalog</a>  
        <a class="nav-link active" href="#kontak">Kontak</a>  
      </div>  
      <div class="navbar"> <!-- Keranjang tetap di sisi kanan -->
        <a class="nav-link active" href="/keranjang"><i class="bi bi-cart"></i></a>
        <a href="" class="btn btn-primary text-white m-auto">Subscription</a>

        @auth
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle text-white" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="/profile">Saya</a></li>
            
            <li><a class="dropdown-item" href="/pesanan">Pesanan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
          </ul>
        </div>
        @else
        <a href="/login" class="btn btn-primary text-white m-auto">Masuk</a>
        @endauth
        
      </div>
    </div>  
  </div>  
</nav>
