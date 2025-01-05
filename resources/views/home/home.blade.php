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
                <h2>GoPro hero9 Black</h2>
                <p>Limited stocks available. Grab it now!</p>
                <a href="shop.html" class="btn mt-3">Shop Collection</a>
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="image-holder">
                <img src="images/banner-image.png" class="img-fluid" alt="banner">
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
                <h2>Iphone 15 Pro Max</h2>
                <p>Discount available. Grab it now!</p>
                <a href="shop.html" class="btn mt-3">Shop Product</a>
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="image-holder">
                <img src="images/banner-image1.png" class="img-fluid" alt="banner">
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
                <h2>Macbook Collection</h2>
                <p>Limited stocks available. Grab it now!</p>
                <a href="shop.html" class="btn mt-3">Shop Collection</a>
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="image-holder">
                <img src="images/banner-image2.png" class="img-fluid" alt="banner">
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

  <section id="katalog">
    <section id="categories">
      <div class="container">
        <div class="section-title overflow-hidden mb-4">
          <h3 class="d-flex align-items-center">Categories</h3>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="card text-center py-4 mb-3 border rounded-3">
              <a href="shop.html">
                <img src={{ asset('img/display-dark-charcoal-different-forms-shapes.jpg') }} class="img-fluid" alt="cart item">
                <h5 class="mt-2"><a href="shop.html">Produk Utama Briket</a></h5>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center py-4 mb-3 border rounded-3">
              <a href="shop.html">
                <img src={{ asset('img/206d9493-0a87-43b1-8973-58b0e3f49452.jpg') }} class="img-fluid" alt="cart item">
                <h5 class="mt-2"><a href="shop.html">Alat dan Aksesoris</a></h5>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center py-4 mb-3 border rounded-3">
              <a href="shop.html">
                <img src={{ asset('https://s3-eu-west-1.amazonaws.com/images.linnlive.com/23982779ac9fbfb3d9848f9e6c4a3338/1f77a2a4-50e3-4d6d-bb60-3a06c250764d.jpg') }} class="img-fluid" alt="cart item">
                <h5 class="mt-2"><a href="shop.html">Bahan Bakar</a></h5>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center py-4 mb-3 border rounded-3">
              <a href="shop.html">
                <img src={{ asset('img/rb_2148899174.png') }} class="img-fluid" alt="cart item">
                <h5 class="mt-2"><a href="shop.html">Layanan</a></h5>
              </a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card text-center py-4 mb-3 border rounded-3">
              <a href="shop.html">
                <img src="images/cat-item5.png" class="img-fluid" alt="cart item">
                <h5 class="mt-2"><a href="shop.html">Paket Spesial</a></h5>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

@endsection