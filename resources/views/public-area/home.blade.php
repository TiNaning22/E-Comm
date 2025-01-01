@extends('layouts.main')
@section('content')
<div class="hero">
  <section id="home"></section>
  
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/top-view-skewers-meat-fire.jpg" class="d-block w-100" alt="briket berkualitas tinggi">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <a href="#" class="btn btn-lg">Lanjut</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/still-life-ashes-with-charcoal (1).jpg" class="d-block w-100" alt="beriket Premium andalan kita">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/five-coals-hookah-heating-stove.jpg" class="d-block w-100" alt="briket dengan harga ekonomi kualitas premium">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>




<br>
<br>
<br>
  <div id="tentang" style="background: linear-gradient(135deg, #fdfbfb, #ebedee); padding: 60px 20px;">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; max-width: 1200px; margin: 0 auto;">
        <!-- Content Section -->
        <div style="flex: 1; padding: 20px;">
            <h2 style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #333; font-size: 36px; margin-bottom: 20px;">
                Tentang Kami
            </h2>
            <p style="font-family: 'Roboto', sans-serif; font-size: 18px; line-height: 1.8; color: #555; margin-bottom: 20px;">
                Selamat datang di <span style="font-weight: bold; color: #ff6600;">briketQu</span>! Kami adalah platform e-commerce yang menyediakan solusi modern untuk kebutuhan briket berkualitas tinggi.
            </p>
            <p style="font-family: 'Roboto', sans-serif; font-size: 18px; line-height: 1.8; color: #555;">
                Fokus kami pada model bisnis <span style="font-weight: bold;">B2B</span> dan <span style="font-weight: bold;">B2C</span> membantu memenuhi kebutuhan pelanggan dari skala rumah tangga hingga industri. Produk kami dirancang untuk efisiensi energi, ramah lingkungan, dan terjangkau.
            </p>
        </div>

        <!-- Image Section -->
        <div style="flex: 1; display: flex; justify-content: center; align-items: center;">
          <img src="img/top-view-skewers-meat-fire.jpg" alt="Briket berkualitas tinggi" style="max-width: 100%; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">

        </div>
    </div>
</div>




  

  <section id="katalog"></section>

  <div  class="card-group">
    
    <h1 class="text-center">Katalog</h1>
    <div class="row justify-content-start">
      <div class="col">
        <div class="card">
          <img src={{ asset('img/display-dark-charcoal-different-forms-shapes.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produk Utama Briket</h5>
            <p class="card-text">Jelajahi katalog Produk utama briket kami sekarang untuk solusi energi yang bersih dan praktis!</p>
            <a href="/" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>
      <!-- Tambahkan elemen .col seperti contoh di atas untuk kartu lainnya -->

      <div class="col">
        <div class="card">
          <img src={{ asset('img/206d9493-0a87-43b1-8973-58b0e3f49452.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Alat dan Aksesoris</h5>
            <p class="card-text">Jelajahi katalog produk alat dan aksesoris kami untuk melihat produk terbaru kami!</p>
            <a href="/keranjang.html" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>

      <!-- Tambahkan elemen .col seperti contoh di atas untuk kartu lainnya -->
      <div class="col">
        <div class="card">
          <img src={{ asset('https://s3-eu-west-1.amazonaws.com/images.linnlive.com/23982779ac9fbfb3d9848f9e6c4a3338/1f77a2a4-50e3-4d6d-bb60-3a06c250764d.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bahan Bakar</h5>
            <p class="card-text">Jelajahi katalog Produk bahan bakar kami sekarang untuk solusi energi yang bersih dan praktis!</p>
            <a href="/keranjang.html" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>
      <!-- Tambahkan elemen .col seperti contoh di atas untuk kartu lainnya -->

    <div class="col">
        <div class="card">
          <img src={{ asset('img/rb_2148899174.png') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Layanan</h5>
            <p class="card-text">Jelajahi katalog Layanan kami sekarang untuk melihat apa saja layanan yang saya berikan!</p>
            <a href="/keranjang.html" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>
      <!-- Tambahkan elemen .col seperti contoh di atas untuk kartu lainnya -->
      <div class="col">
        <div class="card">
          <img src={{ asset('https://files.oaiusercontent.com/file-LA81jmGSqsMEzWvcs8T9YW?se=2024-12-24T17%3A39%3A08Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3D44f94359-5a35-4dad-ac1a-05b865177423.webp&sig=yxll1U4dfno8vWIPbj283CjclPcriNWamR3UOjMACW8%3D') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Paket Spesial</h5>
            <p class="card-text">Jelajahi katalog Paket spesial kami agar dapat membeli produk dengan harga yang lebih hemat!</p>
            <a href="/keranjang.html" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="kontak"></section>
  <div class="form-container">
    <div class="col-md-5">
    <form class="form">
      <h2>Kontak</h2>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
  </div>
  </div>

@endsection