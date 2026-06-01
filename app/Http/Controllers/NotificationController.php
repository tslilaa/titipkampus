<?php

namespace App\Http\Controllers;

use App\Models\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $requests = Request::with('runner')
            ->where('pemohon_id', $userId)
            ->latest()
            ->get();

        $notifications = $requests->map(function ($request) {

            $message = match ($request->status) {

                'menunggu' =>
                    'Request kamu sedang menunggu helper.',

                'diproses' =>
                    ($request->runner?->nama_lengkap ?? 'Helper')
                    . ' sedang mengantarkan pesanan.',

                'selesai' =>
                    'Request telah selesai.',

                default =>
                    'Ada pembaruan request.'
            };

            return [
                'title' => $message,
                'time' => $request->created_at
                    ->diffForHumans(),
                'status' => $request->status
            ];
        });

        return view(
            'notifikasi',
            compact('notifications')
        );
    }
}

