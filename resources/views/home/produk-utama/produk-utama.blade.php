@extends('layouts.main')
@section('content')
<div class="container text-center mt-5">
    <h1>Produk Alat dan Aksesoris</h1>
    <div class="row row-cols-4 mt-5">
      @foreach ($produk as $produk)
      <div class="col mt-5 mb-5">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' .$produk->Gambar) }}" class="card-img-top" alt="..." width="200" height="250">
            <div class="card-body">
              <h5 class="card-title text-center">{{ $produk->NamaProduk }}</h5>
              <p class="card-text">{{ Str::limit($produk->DeskripsiProduk, 50) }}</p>
              <a href="/cekot/{{ $produk->id }}" class="btn btn-primary">Checkout</a>
              <form id="add-to-cart-{{ $produk->id }}" action="{{ route('cart.add', $produk->id) }}" method="POST" style="display: none;">
                @csrf
                <a href="#" 
                  onclick="event.preventDefault(); document.getElementById('add-to-cart-{{ $produk->id }}').submit();" 
                  class="btn btn-primary">Checkout
                </a>
            </form>
            
            <form action="{{route('cart.add', $produk->id)}}" method="POST">
              @csrf
              <button class="btn btn-primary">keranjang</button>
            </form>
            
            </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection