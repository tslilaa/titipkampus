<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestHistoryController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RatingController;
use App\Models\Rating;

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

Route::get(
    '/detail-request/{request}',
    [RequestController::class, 'show']
)
->middleware('auth')
->name('request.show');

Route::get(
    '/detail-helper/{request}',
    [RequestController::class, 'helperDetail']
)
->middleware('auth')
->name('request.helper');

Route::get(
    '/detail-request-process/{request}',
    [RequestController::class, 'processDetail']
)
->middleware('auth')
->name('request.process');

Route::delete(
    '/request/{request}/cancel',
    [RequestController::class, 'cancel']
)
->middleware('auth')
->name('request.cancel');

Route::post(
    '/request/{request}/finish',
    [RequestController::class, 'finish']
)
->middleware('auth')
->name('request.finish');

Route::post(
    '/request/{request}/take',
    [RequestController::class, 'take']
)
->middleware('auth')
->name('request.take');

Route::get(
    '/request-aktif',
    [RequestController::class, 'activeRequest']
)
->middleware('auth')
->name('request.active');

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

