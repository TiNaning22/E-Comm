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

    public function detailProduk($namaKategori)
    {
        // $kategori = Kategori::where('nama_kategori', $namaKategori)->first();

        // if ($kategori) {
        //     $produk = Produk::where('Kategori', $kategori->id)->get();
        //     return view('home.produk-utama', compact('produk', 'kategori'));
        // } else {
        //     // Handle the case when the category is not found
        //     return redirect('home.home')->back()->withError('Kategori not found');
        // }
    }
    
    // public function produkUtamaShow()
    // {
    //     $kategori = Kategori::where('nama_kategori', 'Produk Utama')->first();
    //     $produk = Produk::where('Kategori', $kategori->id)->get();
    
    //     return view('home.produk-utama.produk-utama', compact('produk', 'kategori'));
    // }
    
    // public function produkLayananShow()
    // {
    //     $kategori = Kategori::where('nama_kategori', 'Produk Layanan')->first();
    //     $produk = Produk::where('Kategori', $kategori->id)->get();
    
    //     return view('home.produk-layanan.produk-layanan', compact('produk', 'kategori'));
    // }
    
    // public function bahanBakarShow()
    // {
    //     $kategori = Kategori::where('nama_kategori', 'Bahan Bakar')->first();
        
    //     if ($kategori) {
    //         $produk = Produk::where('Kategori', $kategori->id)->get();
    //         return view('home.bahan-bakar.produk-bahan-bakar', compact('produk', 'kategori'));
    //     } else {
    //         // Handle the case when the category is not found
    //         return redirect()->back()->withError('Kategori Bahan Bakar not found');
    //     }
    // }
    
    // public function paketSpesialShow()
    // {
    //     $kategori = Kategori::where('nama_kategori', 'Paket Spesial')->first();
    //     $produk = Produk::where('Kategori', $kategori->id)->get();
    
    //     return view('home.paket-spesial.produk-paket-spesial', compact('produk', 'kategori'));
    // }
    
    // public function alatAksesorisShow()
    // {
    //     $kategori = Kategori::where('nama_kategori', 'Alat dan Aksesoris')->first();
    //     $produk = Produk::where('Kategori', $kategori->id)->get();
    
    //     return view('home.alat-aksesoris.produk-alat', compact('produk', 'kategori'));
    // }
}
