<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestHistoryController;
use App\Http\Controllers\RequestController;


Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Chat Routes
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chat/{conversation}', [ChatController::class, 'show'])->name('chat.show');
    Route::post('/chat/{conversation}/send', [ChatController::class, 'send'])->name('chat.send');
    
    // Profile & Settings
    Route::get('/profil', [ProfileController::class, 'index'])->name('profil');
    Route::get('/pengaturan', [ProfileController::class, 'pengaturan'])->name('pengaturan');
    
    // History & Tracking
    Route::get('/riwayat', [RequestHistoryController::class, 'index'])->name('riwayat');
    Route::get('/track-lokasi/{id}', [RequestHistoryController::class, 'track'])->name('track.lokasi');
    
});

// Stubs for remaining views
Route::middleware('auth')->group(function () {

    Route::get('/request', [RequestController::class, 'create'])
        ->name('request.create');

    Route::post('/request/store', [RequestController::class, 'store'])
        ->name('request.store');

    Route::get('/daftar-request', [RequestController::class, 'index'])
        ->name('request.index');

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

Route::get('/chat-detail', function () {
    return view('chat-detail');
});

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/rating-review', function () {
    return view('rating-review');
});

Route::get('/notifikasi', function () {
    return view('notifikasi');
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

