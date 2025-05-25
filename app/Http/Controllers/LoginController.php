<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'role'     => 'required|string',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();

            // Tambahkan debugging
            Log::info('Login attempt details:', [
                'username' => $request->username,
                'role' => $request->role,
                'credentials' => ['username' => $request->username, 'password' => '******']
            ]);

            if (strtolower($user->role) !== strtolower($request->role)) {
                Auth::logout();
                return redirect()->route('login')->withErrors(['role' => 'Role tidak sesuai.']);
            }

            if ($user->role === 'mahasiswa') {
                return redirect()->route('dashboard.mahasiswa');
            } elseif ($user->role === 'dosen') {
                return redirect()->route('dashboard.dosen');
            } elseif ($user->role === 'pmmdn') {
                return redirect()->route('dashboard.pmmdn');
            }
        }

        Log::error('Authentication failed');
        return redirect()->route('login')->withErrors(['login' => 'Username atau password salah']);
    }
}
