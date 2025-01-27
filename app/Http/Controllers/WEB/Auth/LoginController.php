<?php

namespace App\Http\Controllers\WEB\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.Login.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard.index')
                ->with('berhasil', 'Selamat, kamu sudah masuk ke dalam dashboard.');
        } else {
            return redirect()->back()
                ->withErrors(['email' => 'Email atau password salah.'])
                ->withInput();
        }
    }
}
