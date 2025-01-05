<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('home.keranjang', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function addToCart(Request $request, $id)
    {
            // Pastikan produk ada
            $produk = Produk::find($id);
    
            if (!$produk) {
                return redirect()->back()->with('error', 'Produk tidak ditemukan!');
            }
    
            // Pastikan user login
            $userId = auth()->id();
    
            if (!$userId) {
                return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
            }
    
            // Cek apakah produk sudah ada di keranjang
            $cart = Cart::where('user_id', $userId)
                ->where('product_id', $id)
                ->first();
    
            if ($cart) {
                // Jika sudah ada, tambahkan jumlahnya
                $cart->quantity += 1;
                $cart->save();
            } else {
                // Jika belum ada, tambahkan ke keranjang
                Cart::create([
                    'user_id' => $userId,
                    'product_id' => $id,
                    'quantity' => 1,
                ]);
            }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
