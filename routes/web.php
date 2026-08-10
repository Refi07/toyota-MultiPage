<?php

use Illuminate\Support\Facades\Route;

// Rute Halaman Utama (Mengalihkan otomatis ke halaman Toyota)
Route::get('/', function () {
    return redirect('/toyota');
});

// Rute Halaman Toyota
Route::get('/toyota', function () {
    return view('toyota.index', [
        'brand' => 'toyota',
        'title' => 'Dealer Toyota Surabaya - Promo Terbaik'
    ]);
});

// Rute Halaman Wuling
Route::get('/wuling', function () {
    return view('wuling.index', [
        'brand' => 'wuling',
        'title' => 'Dealer Wuling Surabaya - Inovasi Masa Depan'
    ]);
});