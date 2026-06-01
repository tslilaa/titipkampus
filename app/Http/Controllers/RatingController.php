<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request as HttpRequest;

class RatingController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $ratings = Request::with([
            'rating',
            'runner'
        ])
        ->where('pemohon_id', $userId)
        ->where('status', 'selesai')
        ->latest()
        ->get();

        return view(
            'rating-review',
            compact('ratings')
        );
    }

    public function show($requestId)
    {
        $request = Request::with(
            'rating',
            'runner'
        )->findOrFail($requestId);

        return view(
            'rating',
            compact('request')
        );
    }

    public function store(
        HttpRequest $httpRequest,
        $requestId
    )
    {
        $request = Request::findOrFail(
            $requestId
        );

        $rating = Rating::updateOrCreate(
            [
                'request_id' => $request->id
            ],
            [
                'bintang' =>
                    $httpRequest->bintang,

                'ulasan' =>
                    $httpRequest->ulasan
            ]
        );

        return redirect(
            '/rating-review'
        )->with(
            'success',
            'Penilaian berhasil disimpan'
        );
    }
}
