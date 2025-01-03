<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;


class CheckoutController extends Controller
{


    public function store(Request $request)
{
    \Log::info('Request Data:', $request->all());

    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
        'alamat' => 'required|string|max:500',
        'payment_method' => 'required|string',
    ]);

    \Log::info('Data Validated:', $validatedData);

    Checkout::create($validatedData);

    \Log::info('Data Saved to Database');
    return redirect()->back()->with('success', 'Alamat berhasil disimpan!');
    if ($request->action === 'process_payment') {
        // Logic untuk memproses pembayaran
        return redirect()->route('pembayaran.view')->with('success', 'Silakan lanjutkan ke pembayaran.');
    }
}
public function detailAlamat()
{
    $checkout = Checkout::all();
    Log::info('Data Checkouts:', $checkout->toArray()); // Log data ke laravel.log
    return view('penjualan.detailAlamat', compact('checkout'));
}


    
}
