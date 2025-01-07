@extends('layouts.main')
@section('content')
<div class="container text-center mt-5">
    <h1>Produk Paket Spesial</h1>
    <div class="row row-cols-4 mt-5">
      @foreach($produk as $p)
      @if($p->Kategori == 'Paket Spesial') <!-- Sesuaikan dengan kategori 'Paket Spesial' -->
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
