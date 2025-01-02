<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data user
        return view('dasboard.datauser.user', compact('users'));
    }
}
