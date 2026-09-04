<?php

use Illuminate\Support\Facades\Route;

// Rute Halaman Utama (Mengalihkan otomatis ke halaman Toyota)
Route::get('/', function () {
    return redirect()->route('toyota.home');
});

// ==========================================
// RUTE TOYOTA (MULTI-PAGE)
// ==========================================
Route::prefix('toyota')->group(function () {
    
    // Toyota - Home
    Route::get('/', function () {
        return view('toyota.index', [
            'brand' => 'toyota',
            'title' => 'Dealer Toyota Surabaya - Promo Terbaik'
        ]);
    })->name('toyota.home');

    // Toyota - Tentang Kami
    Route::get('/about', function () {
        return view('toyota.about', [
            'brand' => 'toyota',
            'title' => 'Tentang Kami - Dealer Resmi Toyota Surabaya'
        ]);
    })->name('toyota.about');

    // Toyota - Produk
    Route::get('/products', function () {
        return view('toyota.products', [
            'brand' => 'toyota',
            'title' => 'Daftar Mobil Toyota Surabaya - Promo & Harga'
        ]);
    })->name('toyota.products');

    // Toyota - Promo
    Route::get('/promo', function () {
        return view('toyota.promo', [
            'brand' => 'toyota',
            'title' => 'Promo Spesial Toyota Surabaya - Super Hemat'
        ]);
    })->name('toyota.promo');

    // Toyota - FAQ
    Route::get('/faq', function () {
        return view('toyota.faq', [
            'brand' => 'toyota',
            'title' => 'FAQ - Pertanyaan Umum Toyota Surabaya'
        ]);
    })->name('toyota.faq');

    // Toyota - Kontak
    Route::get('/contact', function () {
        return view('toyota.contact', [
            'brand' => 'toyota',
            'title' => 'Hubungi Kami - Sales Toyota Surabaya'
        ]);
    })->name('toyota.contact');

});

// ==========================================
// RUTE WULING
// ==========================================
Route::get('/wuling', function () {
    return view('wuling.index', [
        'brand' => 'wuling',
        'title' => 'Dealer Wuling Surabaya - Inovasi Masa Depan'
    ]);
})->name('wuling.home');