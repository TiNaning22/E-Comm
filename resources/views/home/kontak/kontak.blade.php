@extends('layouts.main')

@section('content')

<div class="row m-auto">
    <!-- Bagian Kiri - Informasi Toko -->
    <div class="col-md-6">
      <h2>Visit Our Store</h2>
      <p><strong>Address</strong><br>
        Jl. Sultan Agung No. 123, Kota Jakarta, Indonesia
      </p>

      </p>
      <p><strong>Phone</strong><br>
        (623) 934-2400
      </p>
      <p><strong>Email</strong><br>
        BriketQu@gmail.com
      </p>
      <p><strong>Open Time</strong><br>
        Our store has re-opened for shopping, exchange every day 11am to 7pm
      </p>
      <!-- Ikon Sosial Media -->
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </div>
    </div>

    <!-- Bagian Kanan - Formulir Kontak -->
    <div class="col-md-6">
      <h2>Get in Touch</h2>
      <p>If you've got great products your making or looking to work with us then drop us a line.</p>
      <form action="process_contact.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name *" required>
          </div>
          <div class="col-md-6 mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email *" required>
          </div>
        </div>
        <div class="mb-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-dark w-100">Send</button>
      </form>
    </div>
  </div>
</div>
  @endsection
  