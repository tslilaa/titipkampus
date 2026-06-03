<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class RequestHistoryController extends Controller
{
    public function index(HttpRequest $httpRequest)
    {
        $statusFilter = $httpRequest->query('status');
        
        $query = Request::with(['runner', 'lokasiAwal', 'lokasiTujuan'])
                    ->where('pemohon_id', Auth::id())
                    ->latest();
        
        if ($statusFilter == 'diproses') {

            $query->where('status', 'Taken');

        } elseif ($statusFilter == 'selesai') {

            $query->where('status', 'Done');

        } elseif ($statusFilter == 'dibatalkan') {

            $query->where('status', 'Canceled');

        }

        $requests = $query->get();

        return view('riwayat', compact('requests', 'statusFilter'));
    }

    public function track($id)
    {
        $request = \App\Models\Request::with([
            'lokasiAwal',
            'lokasiTujuan',
            'runner',
            'pemohon'
        ])->findOrFail($id);

        return view(
            'track-lokasi',
            compact('request')
        );
    }
}
