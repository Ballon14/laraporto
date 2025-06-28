<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Hardcode user admin (bisa diubah sesuai kebutuhan)
        $admin = [
            'username' => 'admin',
            'password' => 'admin123', // Ganti dengan password yang lebih aman
        ];

        if (
            $request->username === $admin['username'] &&
            $request->password === $admin['password']
        ) {
            Session::put('is_admin', true);
            return redirect()->intended('/admin/portfolio');
        }

        return back()->withErrors(['login' => 'Username atau password salah!']);
    }

    // Logout
    public function logout()
    {
        Session::forget('is_admin');
        return redirect('/login');
    }
}
