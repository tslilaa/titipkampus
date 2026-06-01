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
        
        if ($statusFilter === 'selesai') {
            $query->where('status', 'Done');
        } elseif ($statusFilter === 'dibatalkan') {
            // Because there's no 'Canceled' enum, we leave it or map it if it exists
            // Assuming no canceled status exists in DB yet based on migrations
            $query->where('status', 'Canceled'); 
        }

        $requests = $query->get();

        return view('riwayat', compact('requests', 'statusFilter'));
    }

    public function track($id)
    {
        $requestModel = Request::with(['runner', 'lokasiAwal', 'lokasiTujuan'])
                        ->where('pemohon_id', Auth::id())
                        ->findOrFail($id);

        return view('track-lokasi', compact('requestModel'));
    }
}
