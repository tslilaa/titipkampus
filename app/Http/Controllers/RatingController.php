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

        $ratingsDiberikan = Request::with(['rating', 'runner'])
            ->where('pemohon_id', $userId)
            ->where('status', 'Done')
            ->latest()
            ->get();

        $ratingsDiterima = Request::with(['rating', 'pemohon'])
            ->where('runner_id', $userId)
            ->where('status', 'Done')
            ->latest()
            ->get();

        $avgRating = \App\Models\Rating::whereHas('request', function($query) use ($userId) {
            $query->where('runner_id', $userId);
        })->avg('bintang') ?? 0;

        return view(
            'rating-review',
            compact('ratingsDiberikan', 'ratingsDiterima', 'avgRating')
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
