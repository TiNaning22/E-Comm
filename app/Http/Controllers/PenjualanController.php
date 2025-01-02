<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function detailTransaksi()
{
    $data = [
        'id' => 1,
        'tanggal' => '2025-01-03',
        'total' => 1500000,
    ];

    return view('penjualan.detail-transaksi', compact('data'));
}
public function detailAlamat()
{
    // Contoh data dummy, sesuaikan dengan data dari database
    $data = [
        'nama_penerima' => 'John Doe',
        'alamat' => 'Jl. Mawar No. 10, Jakarta',
        'telepon' => '08123456789',
    ];

    return view('penjualan.detail-alamat', compact('data'));
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
