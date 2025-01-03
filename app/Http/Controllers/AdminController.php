<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Tambahkan method dashboard di sini
    public function dashboard()
    {
        // Logika untuk halaman dashboard
        return view('dasboard.dashboard');
    }

    // Method-method lain yang mungkin sudah ada...
}