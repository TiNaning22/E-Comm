<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    $order = [
        'order_number' => 'ORD-11',
        'tracking_number' => 'jne13254',
        'status' => 'In Transit',
        'shipping_address' => 'surakarta Distribution Center',
    ];
    $order = [
        'order_number' => 'ORD-12',
        'tracking_number' => 'spx13254',
        'status' => 'In Transit',
        'shipping_address' => 'Yogyakarta Distribution Center',
    ];
    $order = [
        'order_number' => 'ORD-13',
        'tracking_number' => 'jnt13254',
        'status' => 'In Transit',
        'shipping_address' => 'Yogyakarta Distribution Center',
    ];

    // Validasi tracking number
    if ($tracking_code !== $order['tracking_number']) {
        return redirect()->route('tracking.index')->with('error', 'Kode tracking tidak ditemukan.');
    }

    // Jika cocok, kirim data ke view
    return view('tracking.result', compact('order'));
}

    
}
