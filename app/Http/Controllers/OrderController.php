<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Order; // Pastikan model Order sudah dibuat

class OrderController extends Controller
{
    public function index()
    {
        // Ambil data pesanan dari database
        $orders = Order::where('user_id', auth()->user()->id)->get(); // Asumsikan ada kolom user_id

        $data = ([
            'nama_barang' => 'Briket Premium',
            'keterangan' => 'Barang Sudah Diterima',
            'nomor_resi' => '12byug175',
        ]);
        // Tampilkan data ke view
        return view('orders.history', compact('orders'));
    }
}
