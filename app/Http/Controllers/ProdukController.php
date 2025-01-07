<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('dasboard.produk.data-produk', compact('produk', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('dasboard.produk.create-produk', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NamaProduk' => 'required|string|max:255',
            'Kategori' => 'required|exists:kategoris,id', // Validasi kategori harus ada di tabel Kategori
            'HargaProduk' => 'required|integer',
            'StokProduk' => 'required|integer',
            'DeskripsiProduk' => 'required|string',
            'Gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $gambarPath = $request->file('Gambar')->store('produk', 'public');
    
        Produk::create([
            'NamaProduk' => $request->NamaProduk,
            'Kategori' => $request->Kategori, // Menggunakan id kategori
            'HargaProduk' => $request->HargaProduk,
            'StokProduk' => $request->StokProduk,
            'DeskripsiProduk' => $request->DeskripsiProduk,
            'Gambar' => $gambarPath,
        ]);
    
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');

    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mencari produk berdasarkan ID
        $produk = Produk::findOrFail($id); // Menggunakan findOrFail untuk menangani jika produk tidak ditemukan
    
        // Mengembalikan view untuk mengedit produk dengan data produk yang ditemukan
        return view('dasboard.produk.edit-produk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'NamaProduk' => 'required|string|max:255',
            'Kategori' => 'required|string|max:255',
            'HargaProduk' => 'required|integer',
            'StokProduk' => 'required|integer',
            'DeskripsiProduk' => 'required|string',
            'Gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('Gambar');

        if ($request->hasFile('Gambar')) {
            // Hapus gambar lama
            if ($produk->Gambar) {
                Storage::disk('public')->delete($produk->Gambar);
            }
            // Simpan gambar baru
            $data['Gambar'] = $request->file('Gambar')->store('produk', 'public');
        }

        $produk->update($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        // Hapus gambar jika ada
        if ($produk->Gambar) {
            Storage::disk('public')->delete($produk->Gambar);
        }

        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
