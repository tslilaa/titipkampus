<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Models\Rating;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        // TOTAL REQUEST
        $totalRequest = Request::where(
            'pemohon_id',
            $userId
        )->count();

        // STATUS REQUEST
        $menunggu = Request::where(
            'pemohon_id',
            $userId
        )
        ->where('status', 'menunggu')
        ->count();

        $diproses = Request::where(
            'pemohon_id',
            $userId
        )
        ->where('status', 'diproses')
        ->count();

        $selesai = Request::where(
            'pemohon_id',
            $userId
        )
        ->where('status', 'selesai')
        ->count();

        // RATING
        $avgRating = Rating::avg('bintang');

        // AKTIVITAS TERBARU
        $recentRequests = Request::where(
            'pemohon_id',
            $userId
        )
        ->latest()
        ->take(5)
        ->get();

        return view('dashboard', compact(
            'totalRequest',
            'menunggu',
            'diproses',
            'selesai',
            'avgRating',
            'recentRequests'
        ));
    }
}

