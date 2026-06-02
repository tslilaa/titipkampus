<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index(HttpRequest $httpRequest)
    {
        $query = Request::with([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan',
            'pemohon',
            'runner'
        ])

        // tampilkan request orang lain saja
        ->where('pemohon_id', '!=', Auth::id())

        // helper cuma lihat request available
        ->where('status', 'Pending');

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

        return view(
            'daftar-request',
            compact('requests')
        );
    }

    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();

        return view(
            'request',
            compact(
                'categories',
                'locations'
            )
        );
    }

    public function show(Request $request)
    {
        $request->load([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan',
            'pemohon',
            'runner'
        ]);

        return view(
            'detail-request',
            compact('request')
        );
    }

    public function cancel(Request $request)
    {
        if ($request->pemohon_id !== Auth::id()) {

            abort(403);
        }

        if ($request->status !== 'Pending') {

            return back()->with(
                'error',
                'Request tidak bisa dibatalkan.'
            );
        }

        $request->delete();

        return redirect()
            ->route('request.index')
            ->with(
                'success',
                'Request berhasil dibatalkan.'
            );
    }

    public function take(Request $request)
    {
        // cuma request pending yang boleh diambil
        if ($request->status !== 'Pending') {

            return back()->with(
                'error',
                'Request sudah diambil helper lain.'
            );
        }

        $request->update([

            'runner_id' => Auth::id(),

            'status' => 'Taken'
        ]);

        return redirect()->route(
            'request.show',
            $request->id
        );
    }

    public function store(HttpRequest $httpRequest)
    {
        $httpRequest->validate([
            'kategori_id'      => 'required|exists:categories,id',
            'lokasi_awal_id'   => 'required|exists:locations,id',
            'lokasi_tujuan_id' => 'required|exists:locations,id',
            'deskripsi_barang' => 'required|string|max:500',
            'nominal_tip'      => 'required|integer|min:0',
        ]);

        $request = Request::create([
            'pemohon_id'       => Auth::id(),
            'kategori_id'      => $httpRequest->kategori_id,
            'lokasi_awal_id'   => $httpRequest->lokasi_awal_id,
            'lokasi_tujuan_id' => $httpRequest->lokasi_tujuan_id,
            'deskripsi_barang' => $httpRequest->deskripsi_barang,
            'nominal_tip'      => $httpRequest->nominal_tip,
            'status'           => 'Pending',
        ]);

        return redirect()
            ->route('request.show', $request->id)
            ->with(
                'success',
                'Request berhasil dibuat.'
            );

        return redirect()
            ->route('request.index')
            ->with('success', 'Request berhasil dibuat.');
    }
}