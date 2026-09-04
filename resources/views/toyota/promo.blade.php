@extends('layouts.app')

@section('content')
<div class="bg-neutral-950 text-white min-h-screen antialiased relative overflow-hidden flex items-center justify-center">
    <div class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 relative z-10 w-full">
        <div class="bg-gradient-to-r from-slate-900 to-neutral-900 border border-red-500/20 rounded-2xl p-8 md:p-12 relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-red-600/10 rounded-full blur-2xl pointer-events-none"></div>
            <div class="max-w-2xl">
                <span class="bg-red-600 text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded">Promo Bulan Ini</span>
                <h2 class="text-3xl font-extrabold mt-4 mb-4">Promo Spesial Toyota Surabaya Super Hemat!</h2>
                <p class="text-slate-300 leading-relaxed mb-6">
                    Dapatkan penawaran bunga mulai 0%, paket DP super ringan, serta gratis biaya servis berkala dan suku cadang hingga 3 tahun.
                </p>
                <div class="flex flex-wrap gap-4">
                    <div class="bg-slate-950 px-4 py-2 rounded-lg border border-slate-800 text-sm">Angsuran Ringan</div>
                    <div class="bg-slate-950 px-4 py-2 rounded-lg border border-slate-800 text-sm">Free Asuransi</div>
                    <div class="bg-slate-950 px-4 py-2 rounded-lg border border-slate-800 text-sm">Instant Approval</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection