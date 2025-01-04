<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Pastikan model Order sudah dibuat

class OrderController extends Controller
{
    public function index()
    {
        // Ambil data pesanan dari database
        $orders = Order::where('user_id', auth()->id())->get(); // Asumsikan ada kolom user_id

        // Tampilkan data ke view
        return view('orders.history', compact('orders'));
    }
}
