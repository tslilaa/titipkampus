<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Proses login.
     */
    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('nim', $request->nim)->first();

        if (!$user) {
            return back()->with('error', 'NIM tidak ditemukan');
        }

        if (!Auth::attempt([
            'nim' => $request->nim,
            'password' => $request->password
        ])) {
            return back()->with('error', 'Password salah');
        }

        $request->session()->regenerate();

        return redirect('/dashboard');
    }

    /**
     * Logout user.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
