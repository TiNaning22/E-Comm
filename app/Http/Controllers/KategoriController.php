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
        $categories = Kategori::all();
        return view('dasboard.kategori.kategori', compact('categories'));
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Kategori_images', 'public');
        }

        Kategori::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Menampilkan form edit kategori
    public function edit(Kategori $Kategori)
    {
        return view('categories.edit', compact('Kategori'));
    }

    // Memperbarui kategori
    public function update(Request $request, Kategori $Kategori)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($Kategori->image) {
                Storage::disk('public')->delete($Kategori->image);
            }
            $imagePath = $request->file('image')->store('Kategori_images', 'public');
            $Kategori->image = $imagePath;
        }

        $Kategori->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $Kategori->image,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    // Menghapus kategori
    public function destroy(Kategori $Kategori)
    {
        if ($Kategori->image) {
            Storage::disk('public')->delete($Kategori->image);
        }
        $Kategori->delete();

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
