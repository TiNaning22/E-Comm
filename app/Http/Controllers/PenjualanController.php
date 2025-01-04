<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenjualanController extends Controller
{

    public function detailAlamat()
{
    $checkout = Checkout::all();
    // Log::info('Data Checkouts:', $checkout->toArray()); // Log data ke laravel.log
    return view('penjualan.detail-alamat', compact('checkout'));
}
public function detailTransaksi()
{
    // Mengambil data transaksi
    $checkout = Checkout::all();
    return view('penjualan.detail-transaksi', compact('checkout'));
}


public function detailPengiriman()
{
    $pengiriman = [
        'kurir' => 'JNE',
        'resi' => 'JNE123456789',
        'status' => 'Sedang dikirim',
        'estimasi' => '2025-01-05',
    ];

    // Kirim data ke view
    return view('penjualan.detail-pengiriman', ['pengiriman' => $pengiriman]);
}
public function showTransactionDetails()
{
    // Data untuk grafik penjualan
    $salesData = [10, 20, 30, 40, 50, 60]; // Data dummy, bisa diganti dengan data dari database
    $months = ['January', 'February', 'March', 'April', 'May', 'June']; // Bulan dummy

    // Data transaksi untuk tabel
    $transactions = [
        ['date' => '2025-01-01', 'product' => 'Produk A', 'quantity' => 10, 'total' => 100000],
        ['date' => '2025-01-02', 'product' => 'Produk B', 'quantity' => 5, 'total' => 75000],
        ['date' => '2025-01-03', 'product' => 'Produk C', 'quantity' => 8, 'total' => 120000],
    ];

    // Kirim data ke view
    return view('transactions.transaction-details', compact('salesData', 'months', 'transactions'));
}
}
