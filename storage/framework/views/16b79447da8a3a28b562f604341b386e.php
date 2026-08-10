

<?php $__env->startSection('title', 'Dealer Wuling Surabaya - Promo dan Harga Terbaik'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-gray-50 min-h-screen antialiased">
    <!-- 1. Hero Section dengan Gambar Latar Belakang -->
    <div class="relative bg-cover bg-center py-32" style="background-image: url('<?php echo e(asset('images/wuling bg.webp')); ?>');">
        <!-- Lapisan Gelap Transparan agar Teks Putih Tetap Jelas Terbaca -->
        <div class="absolute inset-0 bg-black/75"></div>
        
        <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-4xl font-extrabold text-white tracking-tight sm:text-5xl lg:text-6xl font-display">
                Selamat Datang di <span class="text-blue-800">Wuling Surabaya</span>
            </h1>
            <p class="mt-6 text-xl text-gray-300 max-w-2xl mx-auto">
                Temukan lini kendaraan modern dengan teknologi canggih dan inovatif untuk kenyamanan perjalanan Anda.
            </p>
            <div class="mt-10">
                <a href="#kontak" class="bg-blue-800 text-white font-semibold px-8 py-3 rounded-md hover:bg-blue-900 transition shadow-lg">Minta Brosur</a>
            </div>
        </div>
    </div>

    <!-- 2. Tentang Kami Section -->
    <div id="tentang" class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-blue-800 font-semibold tracking-wide uppercase">Tentang Kami</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl font-display">Dealer Resmi Terpercaya</p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                Kami hadir sebagai dealer resmi Wuling Surabaya yang siap memberikan pelayanan terbaik, proses kredit transparan, cepat, dan penawaran harga paling menguntungkan.
            </p>
        </div>
    </div>

    <!-- 3. Produk Section (Grid) -->
    <div id="produk" class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 border-t border-gray-200">
        <h2 class="text-3xl font-extrabold text-gray-900 font-display text-center mb-12">Daftar Produk Unggulan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Mobil 1 -->
            <div class="bg-white rounded-lg shadow border border-gray-100 overflow-hidden">
                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-50">
                    <img src="<?php echo e(asset('images/air-ev.jpg')); ?>" alt="Wuling Air EV Lite" class="h-full w-full object-contain p-2">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900">Wuling Air EV Lite</h3>
                    <p class="text-blue-800 font-semibold mt-1">Mulai Rp 222.000.000</p>
                    <p class="text-gray-500 text-sm mt-2">Mobil listrik compact yang lincah, efisien, dan sangat ideal untuk mendukung mobilitas aktivitas harian Anda di perkotaan.</p>
                </div>
            </div>
            <!-- Mobil 2 -->
            <div class="bg-white rounded-lg shadow border border-gray-100 overflow-hidden">
                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-50">
                    <img src="<?php echo e(asset('images/bingo1.png')); ?>" alt="Wuling Binguo EV" class="h-full w-full object-contain p-2">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900">Wuling Binguo EV</h3>
                    <p class="text-blue-800 font-semibold mt-1">Mulai Rp 325.500.000</p>
                    <p class="text-gray-500 text-sm mt-2">Hadir dengan desain komparatif yang ikonik, kabin luas yang nyaman, serta jarak tempuh berkendara yang lebih jauh.</p>
                </div>
            </div>
            <!-- Mobil 3 -->
            <div class="bg-white rounded-lg shadow border border-gray-100 overflow-hidden">
                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-50">
                    <img src="<?php echo e(asset('images/wuling alvez.jpg')); ?>" alt="Wuling Alvez" class="h-full w-full object-contain p-2">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900">Wuling Alvez</h3>
                    <p class="text-blue-800 font-semibold mt-1">Mulai Rp 222.500.000</p>
                    <p class="text-gray-500 text-sm mt-2">SUV stylish yang memadukan desain eksterior modern, fitur teknologi cerdas, dan harga yang sangat kompetitif.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Promo Section -->
    <div id="promo" class="bg-blue-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 font-display">Promo Spesial Bulan Ini</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Banjir promo DP murah dan angsuran ringan khusus minggu ini!
            </p>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-800 text-left">
                    <h4 class="font-bold text-lg text-gray-950">Paket Kredit Wuling Istimewa</h4>
                    <p class="text-gray-500 text-sm mt-1">
                        Pilihan angsuran super ringan, bunga rendah, dan tenor panjang hingga 5 tahun dengan proses pengajuan instan yang pasti disetujui.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-800 text-left">
                    <h4 class="font-bold text-lg text-gray-950">Bonus Aksesoris & Garansi Resmi</h4>
                    <p class="text-gray-500 text-sm mt-1">
                        Dapatkan gratis kaca film premium, karpet set, layanan servis gratis berkala, serta jaminan garansi mesin resmi dari Wuling.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Testimoni Section -->
    <div id="testimoni" class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 font-display text-center mb-12">Apa Kata Mereka?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow border border-gray-100">
                <p class="text-gray-600 italic">"Proses pembelian mobil di sini sangat cepat dan transparan. Salesnya ramah, unit mobil dikirim langsung ke rumah tanpa kendala."</p>
                <h5 class="mt-4 font-bold text-gray-900">- Lionel, Surabaya</h5>
            </div>
            <div class="bg-white p-6 rounded-lg shadow border border-gray-100">
                <p class="text-gray-600 italic">"Dapat promo DP murah. Datanya dibantu penuh sampai approval leasing keluar. Pelayanan sales bintang lima!"</p>
                <h5 class="mt-4 font-bold text-gray-900">- Dinda, Sidoarjo</h5>
            </div>
        </div>
    </div>

    <!-- 6. FAQ Section -->
    <div id="faq" class="bg-zinc-900 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold font-display text-center mb-12">Pertanyaan Umum (FAQ)</h2>
            <div class="space-y-6">
                <div>
                    <h4 class="font-semibold text-lg text-blue-800">Apakah melayani pembelian luar kota?</h4>
                    <p class="text-gray-400 mt-1 text-sm">Ya, kami melayani pemesanan dan pengiriman unit mobil ke seluruh wilayah Jawa Timur dengan jaminan proses cepat.</p>
                </div>
                <div class="border-t border-zinc-800 pt-4">
                    <h4 class="font-semibold text-lg text-blue-800">Apa saja syarat pengajuan kredit?</h4>
                    <p class="text-gray-400 mt-1 text-sm">Cukup siapkan KTP Suami/Istri, Kartu Keluarga, NPWP, Slip Gaji atau Bukti Usaha, serta Rekening Tabungan 3 bulan terakhir.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 7. Kontak Section dengan Efek Background Fixed (Parallax) -->
    <div id="kontak" class="relative bg-cover bg-center bg-fixed py-24" style="background-image: url('<?php echo e(asset('images/wuling bg.webp')); ?>');">
        <!-- Lapisan Gelap Transparan (Overlay) -->
        <div class="absolute inset-0 bg-black/75"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl font-extrabold font-display mb-4 text-white">Hubungi Sales Konsultan</h2>
            <p class="text-gray-300 mb-8 max-w-xl mx-auto">Kami siap melayani konsultasi promo, kalkulasi simulasi kredit, dan janji temu uji coba berkendara (test drive) online 24 jam penuh.</p>
            
            <div class="bg-white p-8 rounded-xl shadow-2xl border border-gray-100 inline-block w-full max-w-md text-gray-900">
                <p class="font-bold text-xl text-gray-900">Refi</p>
                <p class="text-sm text-blue-800 font-medium mt-1">Senior Sales Consultant</p>
                <p class="text-gray-500 text-sm mt-4">Alamat Showroom: Jl. Raya Taman No.147, Sidoarjo, Jawa Timur</p>
                
                <!-- Tombol Hubungi via WhatsApp -->
                <div class="mt-6">
                    <a href="https://wa.me" target="_blank" class="block w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition shadow-md text-center text-base">
                        Hubungi via WhatsApp
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyek-sales\resources\views/wuling/index.blade.php ENDPATH**/ ?>