@extends('layouts.main')
@section('content')
<div class="container text-center mt-5">
    <h1>Produk Alat dan Aksesoris</h1>
    <div class="row row-cols-4 mt-5">
      @foreach($produk as $p)
      @if($p->Kategori == 'Alat dan Aksesoris') <!-- Sesuaikan dengan kategori 'Alat dan Aksesoris' -->
      <div class="col m-auto">
        <div class="card" style="width: 18rem;">
            <img src="{{ Storage::url($p->Gambar) }}" class="card-img-top" alt="{{ $p->NamaProduk }}">
            <div class="card-body">
              <h5 class="card-title">{{ $p->NamaProduk }}</h5>
              <p class="card-text">{{ $p->DeskripsiProduk }}</p>
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
</div>
@endsection
