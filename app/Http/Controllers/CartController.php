<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('produk')->where('user_id', Auth::id())->first();
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
    
        // Check if the product is already in the cart
        if ($cart->produk()->where('produk_id', $product->id)->exists()) {
            // Update the quantity if the product is already in the cart
            $cart->produk()->updateExistingPivot($product->id, [
                'quantity' => DB::raw('quantity + 1')
            ]);
        } else {
            // Add product to the cart using the pivot table
            $cart->produk()->attach($product->id, ['quantity' => 1]);
        }

        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function updateCart(Request $request, $id)
{
    // Mencari cart dengan id yang sesuai
    $cart = Cart::find($id);

    // Validasi jika cart tidak ditemukan
    if (!$cart) {
        return redirect()->route('cart.index')->with('error', 'Keranjang tidak ditemukan.');
    }

    // Mengupdate pivot table dengan produk_id dan quantity yang baru
    $cart->produk()->updateExistingPivot($request->produk_id, ['quantity' => $request->quantity]);

    return redirect()->route('cart.index')->with('success', 'Keranjang berhasil diupdate!');
}



public function destroy($produkId)
{
    $cart = Cart::where('user_id', Auth::id())->first();

    if (!$cart) {
        return redirect()->route('cart.index')->with('error', 'Keranjang tidak ditemukan.');
    }

    $cart->produk()->detach($produkId);

    return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
}


}
