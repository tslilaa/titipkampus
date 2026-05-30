<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/track-lokasi', function () {
    return view('track-lokasi');
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

Route::get('/daftar-request', function () {
    return view('daftar-request');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pengaturan', function () {
    return view('pengaturan');
});