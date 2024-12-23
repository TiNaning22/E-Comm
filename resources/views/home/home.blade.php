@extends('layouts.main')
@section('content')
<div class="hero">
  <section id="home"></section>
    <div class="cont-hero">
        <div class="hero-content">
            <h1>Selamat Datang di Sini</h1>
            <p>Temukan Barang Yang Anda Inginkan Disini</p>
            <a href="#" class="btn btn-lg">Lanjut</a>
        </div>
    </div>
  </div>

<div class="container text-center mt-5" id="tentang"> 
    <h2>Tentang Kami</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
          <img src={{ asset('img/5880f3c1-4306-40b1-b50f-358fe39dbd6a.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produk Utama Briket</h5>
            <p class="card-text">Jelajahi katalog Produk utama briket kami sekarang untuk solusi energi yang bersih dan praktis!</p>
            <a href="/keranjang.html" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>

      <!-- Tambahkan elemen .col seperti contoh di atas untuk kartu lainnya -->
      <div class="col">
        <div class="card">
          <img src={{ asset('img/display-dark-charcoal-different-forms-shapes.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produk Utama Briket</h5>
            <p class="card-text">Jelajahi katalog Produk utama briket kami sekarang untuk solusi energi yang bersih dan praktis!</p>
            <a href="/keranjang.html" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>
      <!-- Tambahkan elemen .col seperti contoh di atas untuk kartu lainnya -->

    <div class="col">
        <div class="card">
          <img src={{ asset('img/display-dark-charcoal-different-forms-shapes.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produk Utama Briket</h5>
            <p class="card-text">Jelajahi katalog Produk utama briket kami sekarang untuk solusi energi yang bersih dan praktis!</p>
            <a href="/keranjang.html" class="btn-ktlg btn-primary text-center">Lihat Produk</a>
          </div>
        </div>
      </div>
      <!-- Tambahkan elemen .col seperti contoh di atas untuk kartu lainnya -->
      <div class="col">
        <div class="card">
          <img src={{ asset('img/display-dark-charcoal-different-forms-shapes.jpg') }} class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produk Utama Briket</h5>
            <p class="card-text">Jelajahi katalog Produk utama briket kami sekarang untuk solusi energi yang bersih dan praktis!</p>
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