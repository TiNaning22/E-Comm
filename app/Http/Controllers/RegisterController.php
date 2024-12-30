<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index(){
        return view('auth.registrasi');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validateData = $request->validate([
            'name' => 'required','string','max:255',
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => 'required','string','min:8','confirmed',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login');

    }
}
