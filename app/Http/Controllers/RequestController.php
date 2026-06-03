<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Conversation;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{

    public function index(HttpRequest $httpRequest)
    {
        $status = $httpRequest->status;

        $query = Request::with([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan',
            'pemohon',
            'runner'
        ]);

        if ($status == 'Taken') {

            // request yang aku kerjakan
            $query->where('runner_id', Auth::id())
                ->where('status', 'Taken');

        } elseif ($status == 'Done') {

            // request selesai helper
            $query->where('runner_id', Auth::id())
                ->where('status', 'Done');

        } else {

            // marketplace request
            $query->where('pemohon_id', '!=', Auth::id())
                ->where('status', 'Pending');
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

    public function finish(Request $request)
    {
        // pastikan helper yang ambil request
        if ($request->runner_id !== Auth::id()) {

            abort(403);
        }

        $request->update([

            'status' => 'Done',
            'completed_at' => now()
        ]);

        return redirect()
            ->route(
                'request.index',
                ['status' => 'Done']
            )
            ->with(
                'success',
                'Request selesai.'
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
        // tidak boleh ambil request sendiri
        if ($request->pemohon_id === Auth::id()) {

            return back()->with(
                'error',
                'Kamu tidak bisa mengambil request sendiri.'
            );
        }

        // cuma pending yang bisa diambil
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

        Conversation::firstOrCreate([
            'request_id' => $request->id
        ]);

        return redirect()->route(
            'request.process',
            $request->id
        );
    }

    public function pemohonProcessDetail(Request $requestModel)
    {
        if ($requestModel->pemohon_id != auth()->id()) {
            abort(403);
        }

        $requestModel->load([
            'runner',
            'lokasiAwal',
            'lokasiTujuan',
            'conversation'
        ]);

        return view(
            'detail-request-pemohon-proses',
            [
                'request' => $requestModel
            ]
        );
    }

    public function helperDetail(Request $request)
    {
        $request->load([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan',
            'pemohon',
            'runner'
        ]);

        $avgRating = 0;

        if ($request->pemohon_id) {

            $avgRating = \App\Models\Rating::whereHas(
                'request',
                function ($query) use ($request) {

                    $query->where(
                        'pemohon_id',
                        $request->pemohon_id
                    );
                }
            )->avg('bintang') ?? 0;
        }

        return view(
            'detail-req-helper',
            compact('request', 'avgRating')
        );
    }

    public function processDetail(Request $request)
    {
        $request->load([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan',
            'pemohon',
            'runner'
        ]);

        $avgRating = 0;

        if ($request->pemohon_id) {

            $avgRating = \App\Models\Rating::whereHas(
                'request',
                function ($query) use ($request) {

                    $query->where(
                        'pemohon_id',
                        $request->pemohon_id
                    );
                }
            )->avg('bintang') ?? 0;
        }

        $conversation = Conversation::firstOrCreate([
            'request_id' => $request->id
        ]);

        return view(
            'detail-req-proses',
            compact(
                'request',
                'avgRating',
                'conversation'
            )
        );
    }

    public function activeRequest()
    {
        $request = Request::with([
            'kategori',
            'lokasiAwal',
            'lokasiTujuan',
            'pemohon',
            'runner'
        ])
        ->where('runner_id', Auth::id())
        ->where('status', 'Taken')
        ->latest()
        ->first();

        if (!$request) {

            return redirect()
                ->route('request.index')
                ->with(
                    'error',
                    'Tidak ada request aktif.'
                );
        }

        return redirect()->route(
            'request.process',
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