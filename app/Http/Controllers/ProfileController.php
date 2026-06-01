<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Request as TitipRequest;
use App\Models\Rating;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Total request as pemohon
        $totalRequest = TitipRequest::where('pemohon_id', $user->id)->count();
        
        // Rating and reviews based on when the user is a runner
        $runnerRequests = TitipRequest::where('runner_id', $user->id)->pluck('id');
        $ratings = Rating::whereIn('request_id', $runnerRequests);
        
        $averageRating = number_format($ratings->avg('bintang') ?? 0, 1);
        $totalReviews = $ratings->count();

        return view('profil', compact('user', 'totalRequest', 'averageRating', 'totalReviews'));
    }

    public function pengaturan()
    {
        $user = Auth::user();
        return view('pengaturan', compact('user'));
    }
}
