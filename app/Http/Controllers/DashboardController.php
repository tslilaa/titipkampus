<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // statistik request user login
        $totalRequest = Request::where(
            'pemohon_id',
            $user->id
        )->count();

        $menunggu = Request::where(
            'pemohon_id',
            $user->id
        )
        ->where('status', 'menunggu')
        ->count();

        $diproses = Request::where(
            'pemohon_id',
            $user->id
        )
        ->where('status', 'diproses')
        ->count();

        $selesai = Request::where(
            'pemohon_id',
            $user->id
        )
        ->where('status', 'selesai')
        ->count();

        // request terbaru
        $recentRequests = Request::with([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan'
        ])
        ->where('pemohon_id', $user->id)
        ->latest()
        ->take(3)
        ->get();

        return view('dashboard', compact(
            'user',
            'totalRequest',
            'menunggu',
            'diproses',
            'selesai',
            'recentRequests'
        ));
    }
}