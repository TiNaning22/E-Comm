<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingDetail; // Pastikan model ShippingDetail sudah di-import

class TrackingController extends Controller
{
    public function index()
    {
        // Halaman utama tracking
        return view('tracking.index');
    }

    public function track(Request $request)
    {
        $tracking_code = $request->input('tracking_number');

        // Simulasi data order
        $orders = [
            [
                'order_number' => 'ORD-11',
                'tracking_number' => 'jne13254',
                'status' => 'In Transit',
                'shipping_address' => 'Surakarta Distribution Center',
            ],
            [
                'order_number' => 'ORD-12',
                'tracking_number' => 'spx13254',
                'status' => 'In Transit',
                'shipping_address' => 'Yogyakarta Distribution Center',
            ],
            [
                'order_number' => 'ORD-13',
                'tracking_number' => 'jnt13254',
                'status' => 'In Transit',
                'shipping_address' => 'Yogyakarta Distribution Center',
            ],
        ];

        // Cari order berdasarkan tracking_number
        $order = collect($orders)->firstWhere('tracking_number', $tracking_code);

        // Validasi tracking number
        if (!$order) {
            return redirect()->route('tracking.index')->with('error', 'Kode tracking tidak ditemukan.');
        }

        // Simpan atau update data pengiriman ke database
        ShippingDetail::updateOrCreate(
            ['tracking_number' => $order['tracking_number']],
            [
                'order_number' => $order['order_number'],
                'status' => $order['status'],
                'shipping_address' => $order['shipping_address']
            ]
        );

        // Kirim data ke view hasil tracking
        return view('tracking.result', compact('order'));
    }

    public function showShippingDetails($orderNumber)
    {
        // Ambil detail pengiriman berdasarkan nomor order
        $shippingDetail = ShippingDetail::where('order_number', $orderNumber)->first();

        // Jika data tidak ditemukan, redirect dengan pesan error
        if (!$shippingDetail) {
            return redirect()->route('dashboard.dashboard')->with('error', 'Data pengiriman tidak ditemukan.');
        }

        // Kirimkan variabel $shippingDetail ke view
        return view('penjualan.detail-pengiriman', compact('shippingDetail'));
    }

    public function detailPengiriman()
    {
        // Ambil detail pengiriman terbaru atau yang spesifik dari database
        $shippingDetail = ShippingDetail::latest()->first(); // Ambil data pengiriman terakhir

        // Jika tidak ada data pengiriman, redirect dengan pesan error
        if (!$shippingDetail) {
            return redirect()->route('dasboard.dashboard')->with('error', 'Tidak ada data pengiriman.');
        }

        // Kirimkan variabel $shippingDetail ke view
        return view('penjualan.detail-pengiriman', compact('shippingDetail'));
    }
}
