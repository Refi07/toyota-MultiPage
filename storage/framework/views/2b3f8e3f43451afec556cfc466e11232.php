

<?php $__env->startSection('content'); ?>
<div class="bg-neutral-950 text-white min-h-screen antialiased relative overflow-hidden">
    
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 flex flex-col items-center justify-center min-h-[60vh] text-center relative z-10">
        <span class="text-red-500 uppercase tracking-widest text-xs font-bold bg-red-500/10 px-4 py-1.5 rounded-full border border-red-500/20 mb-6 block">
            DEALER RESMI TERPERCAYA
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white max-w-4xl leading-tight">
            Selamat Datang di <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-amber-500 font-extrabold">Toyota Surabaya</span>
        </h1>
        <p class="mt-6 text-base sm:text-lg lg:text-xl text-slate-400 max-w-2xl font-light leading-relaxed">
            Rasakan sensasi berkendara penuh performa dengan teknologi mesin mutakhir dan kenyamanan kabin premium kelas dunia.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center w-full sm:w-auto">
            <a href="#promo" class="px-8 py-3.5 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg shadow-lg shadow-red-600/30 transition-all duration-300 transform hover:-translate-y-0.5 tracking-wide text-center w-full sm:w-auto">
                Minta Brosur
            </a>
            <a href="#produk" class="px-8 py-3.5 bg-slate-800/80 hover:bg-slate-700 text-slate-200 font-medium rounded-lg border border-slate-700 transition-all duration-300 text-center w-full sm:w-auto">
                Lihat Produk
            </a>
        </div>
    </div>

    <div id="tentang-kami" class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 border-t border-slate-800/60 relative z-10">
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

    <div id="produk" class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 border-t border-slate-800/60 relative z-10">
        <div class="text-center mb-12">
            <span class="text-red-500 font-bold uppercase tracking-wider text-sm">Lini Kendaraan</span>
            <h2 class="text-3xl font-extrabold tracking-tight mt-2">Produk Unggulan Toyota</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card Produk 1: All New Avanza -->
            <div class="bg-slate-900/40 border border-slate-800 rounded-xl overflow-hidden shadow-lg group hover:border-red-500/50 transition-all duration-300">
                <div class="p-2 bg-slate-950 flex items-center justify-center min-h-[220px] overflow-hidden">
                    <img src="<?php echo e(asset('images/avnza.jpg')); ?>" alt="Toyota Avanza" class="w-full h-[180px] object-contain transform group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold group-hover:text-red-500 transition-colors">All New Avanza</h3>
                    <p class="text-sm text-slate-400 mt-1">Mulai dari Rp 230 Jutaan</p>
                    <a href="https://wa.me" target="_blank" class="mt-4 block text-center bg-slate-800 hover:bg-red-600 text-sm font-medium py-2 rounded transition-colors text-white">Info Selengkapnya</a>
                </div>
            </div>

            <!-- Card Produk 2: Kijang Innova Zenix -->
            <div class="bg-slate-900/40 border border-slate-800 rounded-xl overflow-hidden shadow-lg group hover:border-red-500/50 transition-all duration-300">
                <div class="p-2 bg-slate-950 flex items-center justify-center min-h-[220px] overflow-hidden">
                    <img src="<?php echo e(asset('images/kjg.webp')); ?>" alt="Toyota Kijang Innova Zenix" class="w-full h-[180px] object-contain transform group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold group-hover:text-red-500 transition-colors">Kijang Innova Zenix</h3>
                    <p class="text-sm text-slate-400 mt-1">Mulai dari Rp 430 Jutaan</p>
                    <a href="https://wa.me" target="_blank" class="mt-4 block text-center bg-slate-800 hover:bg-red-600 text-sm font-medium py-2 rounded transition-colors text-white">Info Selengkapnya</a>
                </div>
            </div>

            <!-- Card Produk 3: Toyota Raize -->
            <div class="bg-slate-900/40 border border-slate-800 rounded-xl overflow-hidden shadow-lg group hover:border-red-500/50 transition-all duration-300">
                <div class="p-2 bg-slate-950 flex items-center justify-center min-h-[220px] overflow-hidden">
                    <img src="<?php echo e(asset('images/Toyota_Raize.jpg')); ?>" alt="Toyota Raize" class="w-full h-[180px] object-contain transform group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold group-hover:text-red-500 transition-colors">Toyota Raize</h3>
                    <p class="text-sm text-slate-400 mt-1">Mulai dari Rp 250 Jutaan</p>
                    <a href="https://wa.me" target="_blank" class="mt-4 block text-center bg-slate-800 hover:bg-red-600 text-sm font-medium py-2 rounded transition-colors text-white">Info Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>

    <div id="promo" class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 border-t border-slate-800/60 relative z-10">
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

    <div id="faq" class="max-w-4xl mx-auto px-6 py-20 border-t border-slate-800/60 relative z-10">
        <div class="text-center mb-12">
            <span class="text-red-500 font-bold uppercase tracking-wider text-sm">Pertanyaan</span>
            <h2 class="text-3xl font-extrabold tracking-tight mt-2">Frequently Asked Questions</h2>
        </div>
        <div class="space-y-4">
            <div class="bg-slate-900/40 border border-slate-800 rounded-lg p-5">
                <h3 class="font-bold text-base text-white">Apakah melayani pembelian KTP luar kota Surabaya?</h3>
                <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                    Ya, kami melayani pembelian kendaraan untuk seluruh wilayah Jawa Timur dengan proses administrasi dan pengiriman yang dibantu sepenuhnya hingga selesai.
                </p>
            </div>
            <div class="bg-slate-900/40 border border-slate-800 rounded-lg p-5">
                <h3 class="font-bold text-base text-white">Berapa lama proses persetujuan kredit mobil?</h3>
                <p class="text-slate-400 text-sm mt-2 leading-relaxed">
                    Proses pengajuan kredit umumnya memakan waktu 1 hingga 3 hari kerja, asalkan semua berkas dan data persyaratan yang diminta sudah lengkap.
                </p>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyek-sales\resources\views/toyota/index.blade.php ENDPATH**/ ?>