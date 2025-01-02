<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $kategori = Kategori::all();
        return view('dasboard.kategori.kategori', compact('kategori'));
    }

    // Menampilkan form tambah kategori
    public function create()
    {
        return view('dasboard.kategori.tambah-kategori');
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Kategori' => 'required|string|max:255',
            'Deskripsi' => 'nullable|string',
            'Gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('Gambar')) {
            $imagePath = $request->file('Gambar')->store('Kategori_Gambar', 'public');
        }

        Kategori::create([
            'Nama_Kategori' => $request->Nama_Kategori,
            'Deskripsi' => $request->Deskripsi,
            'Gambar' => $imagePath,
        ]);

        return redirect('kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Menampilkan form edit kategori
    public function edit(Kategori $Kategori)
    {
      
    }

    // Memperbarui kategori
    public function update(Request $request, Kategori $Kategori)
    {
        //edit kategori
        $request->validate([
            'Nama_Kategori' => 'required|string|max:255',
            'Deskripsi' => 'nullable|string',
            'Gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $Kategori->image;
        if ($request->hasFile('Gambar')) {
            if ($Kategori->image) {
                Storage::disk('public')->delete($Kategori->image);
            }
            $imagePath = $request->file('Gambar')->store('Kategori_Gambar', 'public');
        }
    }

    // Menghapus kategori
    public function destroy(Kategori $Kategori)
    {
        if ($Kategori->image) {
            Storage::disk('public')->delete($Kategori->image);
        }
        $Kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
