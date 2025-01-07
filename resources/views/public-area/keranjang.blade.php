@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Your Cart</h1>

    <h1 style="text-align: center">keranjang</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Product</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Price</th>
                <th class="text-center">Total</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($cart && $cart->produk->count())
    @foreach($cart->produk as $item)
        <tr>
            <td>{{ optional($item)->NamaProduk ?? 'Produk tidak ditemukan' }}</td>
            <td class="align-middle text-center">
                <form action="{{ route('cart.update', $item->pivot->id ?? 0) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="number" name="quantity" value="{{ $item->pivot->quantity ?? 1 }}" min="1" class="form-control text-center mx-auto" style="width: 80px;">
                </form>
            </td>
            <td class="align-middle text-center">{{ optional($item)->HargaProduk ?? 0 }}</td>
            <td class="align-middle text-center">{{ (optional($item)->HargaProduk ?? 0) * ($item->pivot->quantity ?? 1) }}</td>
            <td class="align-middle text-center">
                <form action="{{ route('cart.destroy', $item->pivot->id ?? 0) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                </form>                

                <form action="{{ route('cart.update', $item->pivot->id ?? 0) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="produk_id" value="{{ $item->id }}">
                    <input type="number" name="quantity" value="{{ $item->pivot->quantity ?? 1 }}" min="1" class="form-control text-center mx-auto" style="width: 80px;">
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </form>
                
                
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="5" class="text-center">Keranjang kosong</td>
    </tr>
@endif
        </tbody>
    </table>
    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
        {{-- <input type="hidden" name="produk_id" value="{{ $item->id }}"> --}}
        <button type="submit" class="btn btn-success">Checkout Sekarang</button>
    </form>
    
        <br>
        <br>
        <br>
</div>
@endsection
