@extends('layouts.app')

@section('content')
<div class="bg-neutral-950 text-white min-h-screen antialiased relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 relative z-10">
        <div class="text-center mb-12">
            <span class="text-red-500 font-bold uppercase tracking-wider text-sm">Lini Kendaraan</span>
            <h2 class="text-3xl font-extrabold tracking-tight mt-2">Produk Unggulan Toyota</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card Produk 1: All New Avanza -->
            <div class="bg-slate-900/40 border border-slate-800 rounded-xl overflow-hidden shadow-lg group hover:border-red-500/50 transition-all duration-300">
                <div class="p-2 bg-slate-950 flex items-center justify-center min-h-[220px] overflow-hidden">
                    <img src="{{ asset('images/avnza.jpg') }}" alt="Toyota Avanza" class="w-full h-[180px] object-contain transform group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold group-hover:text-red-500 transition-colors">All New Avanza</h3>
                    <p class="text-sm text-slate-400 mt-1">Mulai dari Rp 230 Jutaan</p>
                    <a href="https://wa.me/6289687048663?text=Halo%2C%20saya%20tertarik%20dengan%20All%20New%20Avanza" target="_blank" class="mt-4 block text-center bg-slate-800 hover:bg-red-600 text-sm font-medium py-2 rounded transition-colors text-white">Info Selengkapnya</a>
                </div>
            </div>

            <!-- Card Produk 2: Kijang Innova Zenix -->
            <div class="bg-slate-900/40 border border-slate-800 rounded-xl overflow-hidden shadow-lg group hover:border-red-500/50 transition-all duration-300">
                <div class="p-2 bg-slate-950 flex items-center justify-center min-h-[220px] overflow-hidden">
                    <img src="{{ asset('images/kjg.webp') }}" alt="Toyota Kijang Innova Zenix" class="w-full h-[180px] object-contain transform group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold group-hover:text-red-500 transition-colors">Kijang Innova Zenix</h3>
                    <p class="text-sm text-slate-400 mt-1">Mulai dari Rp 430 Jutaan</p>
                    <a href="https://wa.me/6289687048663?text=Halo%2C%20saya%20tertarik%20dengan%20Kijang%20Innova%20Zenix" target="_blank" class="mt-4 block text-center bg-slate-800 hover:bg-red-600 text-sm font-medium py-2 rounded transition-colors text-white">Info Selengkapnya</a>
                </div>
            </div>

            <!-- Card Produk 3: Toyota Raize -->
            <div class="bg-slate-900/40 border border-slate-800 rounded-xl overflow-hidden shadow-lg group hover:border-red-500/50 transition-all duration-300">
                <div class="p-2 bg-slate-950 flex items-center justify-center min-h-[220px] overflow-hidden">
                    <img src="{{ asset('images/Toyota_Raize.jpg') }}" alt="Toyota Raize" class="w-full h-[180px] object-contain transform group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold group-hover:text-red-500 transition-colors">Toyota Raize</h3>
                    <p class="text-sm text-slate-400 mt-1">Mulai dari Rp 250 Jutaan</p>
                    <a href="https://wa.me/6289687048663?text=Halo%2C%20saya%20tertarik%20dengan%20Toyota%20Raize" target="_blank" class="mt-4 block text-center bg-slate-800 hover:bg-red-600 text-sm font-medium py-2 rounded transition-colors text-white">Info Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection