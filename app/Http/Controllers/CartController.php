<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->first();
        $productsInCart = $cart ? $cart->products : collect();
        return view('public-area.keranjang', compact('productsInCart', 'cart'));
    }

    public function addToCart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
    
        $product = Produk::find($id);
    
        if (!$product) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan!');
        }
    
        // Check if the cart exists for the current user
        $cart = Cart::where('user_id', Auth::id())->first();
    
        // If the cart doesn't exist, create a new one
        if (!$cart) {
            $cart = Cart::create(['user_id' => Auth::id()]);
        }
    
        // Add product to the cart
        $cart->products()->attach($product->id, ['quantity' => 2]);

        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function updateCart(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->products()->updateExistingPivot($request->product_id, ['quantity' => $request->quantity]);
        return redirect()->route('cart.index')->with('success', 'Keranjang berhasil diupdate!');
    }


}
