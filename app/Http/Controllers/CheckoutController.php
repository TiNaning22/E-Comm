<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    // Method untuk menyimpan alamat
    public function store(Request $request)
    {
        // Validasi input data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'alamat' => 'required|string|max:500',
            'payment_method' => 'required|string',
        ]);

        // Simpan data ke database
        Checkout::create($validatedData);

        // Jika tombol yang diklik adalah "Simpan Alamat"
        if ($request->action === 'save_address') {
            return redirect()->back()->with('success', 'Alamat berhasil disimpan!');
        }

        // Jika tombol yang diklik adalah "Bayar Sekarang"
        if ($request->action === 'process_payment') {
            return redirect()->route('home.payment.success')->with('success', 'Silakan lanjutkan ke pembayaran.');
        }

        // Default redirect jika action tidak dikenali
        return redirect()->back()->with('error', 'Terjadi kesalahan, mohon coba lagi.');
    }

    // Method untuk menampilkan data alamat yang disimpan
    public function detailAlamat()
    {
        // Memilih hanya kolom nama dan alamat
        $checkout = Checkout::select('nama', 'alamat')->get();
    
        return view('penjualan.detailAlamat', compact('checkout'));
    }

    // Method untuk halaman Payment Success
    public function paymentSuccess()
    {
        return view('home.payment-success');
    }
    // Method untuk menampilkan data alamat yang disimpan
    public function detailTransaksi()
    {
        $transactions = Checkout::all();
        return view('penjualan.detailTransaksi', compact('transactions'));
    }
}
