<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function home()
    {
        $kategori = Kategori::all();
        
        return view('home.home', compact('kategori'));
    }

    public function produkUtamaShow()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();

        return view('home.produk-utama.produk-utama', compact('produk', 'kategori'));
    }

    public function produkLayananShow()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();

        return view('home.produk-layanan.produk-layanan', compact('produk', 'kategori'));
    }

    public function bahanBakarShow()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();

        return view('home.bahan-bakar.produk-bahan-bakar', compact('produk', 'kategori'));
    }

    public function paketSpesialShow()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();

        return view('home.paket-spesial.produk-paket-spesial', compact('produk', 'kategori'));
    }

    public function alatAksesorisShow()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();

        return view('home.alat-aksesoris.produk-alat', compact('produk', 'kategori'));
    }
    
}
