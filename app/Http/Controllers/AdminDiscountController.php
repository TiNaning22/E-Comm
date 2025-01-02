<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class AdminDiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return view('dasboard.datadiskon.diskon', compact('discounts'));
    }

    public function create()
    {
        return view('dasboard.datadiskon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|numeric|min:0|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Discount::create($request->all());

        return redirect('diskon')->with('success', 'Diskon berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
    
        $discount = Discount::findOrFail($id); // Ubah Diskon ke Discount
        $discount->update($request->all());
    
        return redirect('diskon')->with('success', 'Diskon berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $discount = Discount::findOrFail($id); // Ubah Diskon ke Discount
        $discount->delete();
    
        return redirect('diskon')->with('success', 'Diskon berhasil dihapus.');
    }
    
}

