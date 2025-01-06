@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Your Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- @if($carts->count() > 0) --}}
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
            <tr>
                <td>
                    <div class="card shadow-sm" style="width: 15rem;">
                        <img src="/path/to/iphone14.jpg" class="card-img-top rounded" alt="Apple iPhone 14">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">Produk</h5>
                            <p class="card-text text-muted small">Sleek design, powerful performance, and advanced features.</p>
                        </div>
                    </div>
                </td>
                <td class="align-middle text-center">
                    <form action="/cart/1/update" method="POST">
                        <input type="hidden" name="_token" value="csrf_token_here">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="number" name="quantity" value="2" min="1" class="form-control text-center mx-auto" style="width: 60px;">
                    </form>
                </td>
                <td class="align-middle text-center">$999</td>
                <td class="align-middle text-center">$1998</td>
                <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                        <form action="/checkout" method="GET" class="mb-2">
                            <button type="submit" class="btn btn-sm btn-success">Checkout</button>
                        </form>
                        <form action="/cart/1/destroy" method="POST">
                            <input type="hidden" name="_token" value="csrf_token_here">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                        </form>
                    </div>
                </td>
            </tr>
            @foreach($carts as $cart)
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
                    <form action="/checkout" method="GET" class="mb-2">
                        <button type="submit" class="btn btn-sm btn-success">Checkout</button>
                    </form>
                    <form action="{{ route('cart.destroy', $cart) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
        <a href="/cekot" class="btn btn-success">Checkout Sekarang</a>
        <br>
        <br>
        <br>

    {{-- @else
        <p>Your cart is empty!</p>
    @endif --}}
</div>
@endsection
