<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Checkout;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // Menampilkan halaman checkout
    // Menampilkan halaman checkout
    public function index()
    {
        // // Ambil keranjang berdasarkan user
        $cart = Cart::where('user_id', Auth::id())->first();

        // Periksa apakah keranjang ada
        if (!$cart) {
            // Jika tidak ada keranjang, beri pesan kesalahan
            return redirect()->with('error', 'Keranjang Anda kosong.');
        }

        // // Ambil produk dari keranjang
        $products = $cart->products;

        // // Hitung total harga dari produk di keranjang
        $total = $cart->products->sum(function ($product) {
            return $product->harga * $product->pivot->quantity;
        });

        // Inisialisasi diskon dan potongan harga
        $discount = null;
        $discountAmount = 0;

        // Cek apakah ada kode voucher di session
        if (session()->has('voucher_code')) {
            $voucherCode = session('voucher_code');
            $discount = Discount::where('code', $voucherCode)
                ->where('start_date', '<=', now())
                ->where('end_date', '>=', now())
                ->first();

            if ($discount) {
                // Jika diskon ditemukan, hitung potongan harga
                $discountAmount = ($total * $discount->percentage) / 100;
            }
        }

        // Hitung total setelah diskon
        $totalAfterDiscount = $total - $discountAmount;

        return view('public-area.checkout');
    }
    // Proses checkout
    public function process(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'payment_method' => 'required',
            'voucher_code' => 'nullable|exists:discounts,code',
        ]);

        // Ambil kode voucher dari request
        $voucherCode = $request->voucher_code;
        $discountAmount = 0;
        $discount = null;

        // Cek apakah ada kode voucher yang valid
        if ($voucherCode) {
            $discount = Discount::where('code', $voucherCode)
                ->where('start_date', '<=', now())
                ->where('end_date', '>=', now())
                ->first();

            if ($discount) {
                // Jika diskon ditemukan, hitung potongan harga
                $cart = Cart::where('user_id', Auth::id())->first();
                $total = $cart->products->sum(function ($product) {
                    return $product->harga * $product->pivot->quantity;
                });

                $discountAmount = ($total * $discount->percentage) / 100;
            } else {
                return redirect()->back()->with('error', 'Kode voucher tidak valid.');
            }
        }

        $cart = Cart::where('user_id', Auth::id())->first();

        if (!$cart || $cart->products->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang Anda kosong.');
        }

        // Mulai transaksi untuk pemrosesan checkout
        DB::beginTransaction();

        try {
            // Proses pemesanan
            $order = Order::create([
                'user_id' => Auth::id(),
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'payment_method' => $request->payment_method,
                'total' => $cart->products->sum(function ($product) {
                    return $product->harga * $product->pivot->quantity;
                }) - $discountAmount, // Total setelah diskon
            ]);

            // Menambahkan produk ke order
            foreach ($cart->products as $product) {
                $order->products()->attach($product->id, [
                    'quantity' => $product->pivot->quantity,
                    'price' => $product->harga,
                ]);
            }

            // Kosongkan keranjang setelah pemesanan
            $cart->products()->detach();
            DB::commit();

            // Redirect ke halaman pembayaran sukses
            return redirect()->route('payment.success', ['orderId' => $order->id]);
        } catch (\Exception $e) {
            // Rollback jika terjadi kesalahan
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memproses checkout.');
        }
    }

    // Menampilkan halaman sukses setelah pembayaran
    public function success($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('home.payment-success', compact('order'));
    }
}
