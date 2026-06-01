<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RatingController;
use App\Models\Rating;

Route::get('/', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']
)->middleware('auth');

Route::get('/request', function () {
    return view('request');
});

Route::get('/detail-request', function () {
    return view('detail-request');
});

Route::get('/detail-req-helper', function () {
    return view('detail-req-helper');
});

Route::get('/detail-req-proses', function () {
    return view('detail-req-proses');
});


Route::get('/track-lokasi', function () {
    return view('track-lokasi');
});

Route::get('/chat-detail', function () {
    return view('chat-detail');
});

Route::middleware('auth')->group(function () {

    Route::get(
        '/rating-review',
        [RatingController::class, 'index']
    );

    Route::get(
        '/rating/{request}',
        [RatingController::class, 'show']
    );

    Route::post(
        '/rating/{request}',
        [RatingController::class, 'store']
    );
});

Route::get('/notifikasi',
    [NotificationController::class, 'index']
)->middleware('auth');


Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pengaturan', function () {
    return view('pengaturan');
});

Route::get('/daftar-request', [RequestController::class, 'index'])
    ->middleware('auth')
    ->name('request.index');


Route::middleware('auth')->group(function () {

    Route::get('/chat', [ChatController::class, 'index'])
        ->name('chat.index');

    Route::get('/chat/{conversation}', [ChatController::class, 'show'])
        ->name('chat.show');

    Route::post('/chat/{conversation}/send', [ChatController::class, 'send'])
        ->name('chat.send');

});

