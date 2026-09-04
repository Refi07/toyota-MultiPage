@extends('layouts.app')

@section('content')
<div class="bg-neutral-950 text-white min-h-screen antialiased relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-red-500 font-bold uppercase tracking-wider text-sm">Tentang Kami</span>
                <h2 class="text-3xl font-extrabold tracking-tight mt-2 mb-6">Mitra Perjalanan Terbaik Anda di Surabaya</h2>
                <p class="text-slate-400 leading-relaxed mb-4">
                    Kami merupakan dealer resmi Toyota di Surabaya yang berkomitmen memberikan layanan penjualan mobil baru dengan proses yang cepat, transparan, dan profesional.
                </p>
                <p class="text-slate-400 leading-relaxed">
                    Fokus utama kami adalah memberikan solusi kendaraan yang tepat sesuai kebutuhan keluarga maupun bisnis Anda, didukung dengan layanan purna jual yang terpercaya.
                </p>
            </div>
            <div class="bg-slate-900/50 p-8 rounded-2xl border border-slate-800 shadow-xl">
                <h3 class="text-xl font-bold mb-4 text-red-400">Mengapa Memilih Kami?</h3>
                <ul class="space-y-3 text-slate-300">
                    <li class="flex items-center gap-3">✓ Proses Kredit Cepat & DP Ringan</li>
                    <li class="flex items-center gap-3">✓ Layanan Test Drive Langsung ke Rumah</li>
                    <li class="flex items-center gap-3">✓ Bonus Aksesoris & Fasilitas Lengkap</li>
                    <li class="flex items-center gap-3">✓ Sales Representative Berpengalaman</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection