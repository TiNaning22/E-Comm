@extends('layouts.main')
@section('content')



<section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray" style="background-image: url(images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
  <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
    <svg class="chevron-forward-circle d-flex justify-content-center align-items-center border rounded-3 p-2" width="55" height="55">
      <use xlink:href="#alt-arrow-right-outline"></use>
    </svg>
  </div>
  <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
    <svg class="chevron-back-circle d-flex justify-content-center align-items-center border rounded-3 p-2" width="55" height="55">
      <use xlink:href="#alt-arrow-left-outline"></use>
    </svg>
  </div>
  <div class="swiper main-swiper">
    <div class="swiper-wrapper d-flex align-items-center">
      <div class="swiper-slide">
        <div class="container">
          <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
            <div class="col-md-5 offset-md-1">
              <div class="banner-content">
                <h2>Briket Premium</h2>
                <p>Unimited stocks available. Dapatkan sekarang!</p>
                <a href="shop.html" class="btn mt-3">Shop Collection</a>
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="image-holder">
                <img src="{{ asset('img/lyout 1.jpg') }}" class="img-fluid" alt="banner">
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
            <div class="col-md-5 offset-md-1">
              <div class="banner-content">
                <h2>NYALA DAN MAMBARA</h2>
                <p>kualitas premium no1. Grab it now!</p>
                <a href="shop.html" class="btn mt-3">Shop Product</a>
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="image-holder">
                <img src="{{asset('img/lyout 3.jpg')}}" class="img-fluid" alt="banner">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
            <div class="col-md-5 offset-md-1">
              <div class="banner-content">
                <h2>BAHAN TERBAIK</h2>
                <p>kualitas terbaik hanya ada di sini. Grab it now!</p>
                <a href="shop.html" class="btn mt-3">Shop Collection</a>
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="image-holder">
                <img src="{{asset('img/lyout 2.jpg')}}" class="img-fluid" alt="banner">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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


<section id="categories" class="my-5">
  <div class="container">
    <div class="section-title text-center mb-4">
      <h3 class="d-flex justify-content-center align-items-center fw-bold">Categories</h3>

    </div>
    <div class="row justify-content-center">
      @foreach ($kategori as $kategori)
        <div class="col-md-2">
          <div class="card text-center py-4 mb-3 border rounded-3">
            <a href="{{ route('produk') }}">
                  <img src="{{ asset('storage/' . $kategori->Gambar) }}" class="img-fluid" alt="cart item">
                  <h5 class="mt-2"><a href="{{ route('produk') }}">{{ $kategori->Nama_Kategori }}</a></h5>
                </a>
              </div>
        </div>
      @endforeach
        </div>
      </div>
    </section>
  </section>



@endsection