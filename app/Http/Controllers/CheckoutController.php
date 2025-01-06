<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->first();
        $products = $cart ? $cart->products : collect();

        return view('checkout.index', compact('products'));
    }

    public function process(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'payment_method' => 'required',
        ]);

        Checkout::create($validateData);

        $cart = Cart::where('user_id', Auth::id())->first();

        if (!$cart || $cart->products->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang Anda kosong.');
        }

        DB::beginTransaction();

        try {
            $order = Order::create([
                'user_id' => Auth::id(),
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'payment_method' => $request->payment_method,
                'total' => $cart->products->sum(function ($product) {
                    return $product->harga * $product->pivot->quantity;
                }),
            ]);

            foreach ($cart->products as $product) {
                $order->products()->attach($product->id, [
                    'quantity' => $product->pivot->quantity,
                    'price' => $product->harga,
                ]);
            }

            // Kosongkan keranjang
            $cart->products()->detach();

            DB::commit();

            return redirect()->route('payment.success', $order->id);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memproses checkout.');
        }
    }

    public function success($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('home.payment-success', compact('order'));
    }



}