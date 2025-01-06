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
            @if($cart && $cart->count())
                @foreach($cart as $cart)
                    <tr>
                        <td>{{ $cart->product->name }}</td>
                        <td class="align-middle text-center">
                            <form action="{{ route('cart.update', $cart) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $cart->quantity }}" min="1" class="form-control text-center mx-auto" style="width: 80px;">
                            </form>
                        </td>
                        <td class="align-middle text-center">{{ $cart->product->price }}</td>
                        <td class="align-middle text-center">{{ $cart->product->price * $cart->quantity }}</td>
                        <td class="align-middle text-center">
                            <form action="{{ route('cart.destroy', $cart) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
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
        <a href="/cekot" class="btn btn-success">Checkout Sekarang</a>
        <br>
        <br>
        <br>
</div>
@endsection
