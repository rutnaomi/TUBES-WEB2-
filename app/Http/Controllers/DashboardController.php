<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function mahasiswa()
    {
        $user = Auth::user();
        return view('dashboard.mahasiswa', compact('user'));
    }

    public function dosen()
    {
        $user = Auth::user();
        return view('dashboard.dosen', compact('user'));
    }

    public function pmmdn()
    {
        $user = Auth::user();
        return view('dashboard.pmmdn', compact('user'));
    }
}
