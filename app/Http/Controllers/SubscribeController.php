<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function showForm()
    {
        return view('home.subs.form');
    }

    public function showData()
    {
        $subscriptions = Subscription::all();
        return view('dasboard.subs', compact('subscriptions'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'payment_method' => 'required|in:kartu_kredit,transfer_bank',
            'scale' => 'required|in:kecil,besar',
            'delivery_frequency' => 'required|in:harian,mingguan,bulanan',
        ]);

        

        Subscription::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'payment_method' => $request->input('payment_method'),
            'scale' => $request->input('scale'),
            'delivery_frequency' => $request->input('delivery_frequency'),
        ]);

        // Redirect dengan pesan sukses
        return redirect('/')->with('success', 'Pendaftaran langganan berhasil!');
    }
}
