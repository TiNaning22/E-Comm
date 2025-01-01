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

        return redirect()->route('dasboard.datadiskon.diskon')->with('success', 'Diskon berhasil ditambahkan.');
    }

    
}

