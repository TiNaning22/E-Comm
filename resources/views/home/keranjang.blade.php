@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Your Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- @if($carts->count() > 0) --}}
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts as $cart)
                    <tr>
                        <td>{{ $cart->product->name }}</td>
                        <td>
                            <form action="{{ route('cart.update', $cart) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $cart->quantity }}" min="1" class="form-control" style="width: 80px;">
                                <button type="submit" class="btn btn-sm btn-primary mt-1">Update</button>
                            </form>
                        </td>
                        <td>{{ $cart->product->price }}</td>
                        <td>{{ $cart->product->price * $cart->quantity }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $cart) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="#" class="btn btn-success">Proceed to Checkout</a>
    {{-- @else
        <p>Your cart is empty!</p>
    @endif --}}
</div>
@endsection
