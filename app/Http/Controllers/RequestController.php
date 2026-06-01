<?php

namespace App\Http\Controllers;

use App\Models\Request;

class RequestController extends Controller
{
    public function index(\Illuminate\Http\Request $httpRequest)
    {
        $query = \App\Models\Request::with([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan',
            'pemohon',
            'runner'
        ]);

        if ($httpRequest->filled('search')) {
            $query->where(
                'deskripsi_barang',
                'like',
                '%' . $httpRequest->search . '%'
            );
        }

        $requests = $query
            ->latest()
            ->get();

        return view('daftar-request', compact('requests'));
    }
}