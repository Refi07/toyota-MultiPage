<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Toyota & Wuling Surabaya</title>
    <!-- Tailwind CSS v4 Instan -->
    <script src="https://unpkg.com"></script>
    <!-- FontAwesome untuk Ikon -->
    <link rel="stylesheet" href="https://cloudflare.com">
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans pt-16">

    <!-- 1. NAVBAR RESPONSIF -->
    <nav class="bg-white shadow-md fixed w-full top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-2">
                    <span class="text-xl font-black text-red-600 tracking-wider">SALES KONSULTAN</span>
                </div>
                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8 font-medium">
                    <a href="#hero" class="text-gray-600 hover:text-red-600 transition">Home</a>
                    <a href="#produk" class="text-gray-600 hover:text-red-600 transition">Produk</a>
                    <a href="#footer" class="text-gray-600 hover:text-red-600 transition">Kontak</a>
                </div>
                <!-- Tombol Menu HP -->
                <button onclick="toggleMenu()" class="md:hidden text-gray-600 focus:outline-none">
                    <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i>
                </button>
            </div>
        </div>
        <!-- Menu Mobile Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-4 space-y-3 shadow-inner">
            <a href="#hero" onclick="toggleMenu()" class="block text-gray-600 hover:text-red-600 font-medium">Home</a>
            <a href="#produk" onclick="toggleMenu()" class="block text-gray-600 hover:text-red-600 font-medium">Produk</a>
            <a href="#footer" onclick="toggleMenu()" class="block text-gray-600 hover:text-red-600 font-medium">Kontak</a>
        </div>
    </nav>

    <!-- 2. HERO BANNER -->
    <section id="hero" class="py-20 md:py-32 bg-gradient-to-r from-slate-900 to-red-950 text-white px-4">
        <div class="max-w-5xl mx-auto text-center space-y-6">
            <span class="bg-red-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full">Promo Wilayah Surabaya & Sidoarjo</span>
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight">Dapatkan Promo Mobil Toyota & Wuling Terbaik</h1>
            <p class="text-gray-300 text-sm md:text-base max-w-2xl mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-2">
                <a href="#produk" class="bg-red-600 hover:bg-red-700 text-white font-bold px-8 py-3 rounded-lg shadow-lg transition-all text-center">Lihat Katalog Mobil</a>
                <a href="https://wa.me" class="bg-transparent border border-white hover:bg-white hover:text-gray-900 text-white font-bold px-8 py-3 rounded-lg transition-all text-center"><i class="fa-brands fa-whatsapp mr-2"></i>Hubungi Sales Refi</a>
            </div>
        </div>
    </section>

    <!-- 3. SECTION PRODUK (TOYOTA & WULING) -->
    <section id="produk" class="py-16 max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-2">Katalog Mobil Unggulan</h2>
        <p class="text-gray-500 text-center mb-10">Daftar unit promo Toyota dan Wuling Surabaya terbaru.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Contoh Mobil Toyota -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition">
                <div class="bg-gray-200 h-48 flex items-center justify-center text-gray-400 font-bold">Gambar Toyota</div>
                <div class="p-6 space-y-4">
                    <span class="text-xs font-bold bg-red-100 text-red-700 px-2.5 py-1 rounded">TOYOTA</span>
                    <h3 class="text-xl font-bold">New Avanza</h3>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                    <div class="text-red-600 font-black text-lg">Mulai Rp XXX Jutaan</div>
                    <a href="https://wa.me" class="block bg-red-600 text-white text-center font-bold py-2.5 rounded-lg hover:bg-red-700 transition">Hubungi Sales</a>
                </div>
            </div>

            <!-- Contoh Mobil Wuling -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-xl transition">
                <div class="bg-gray-200 h-48 flex items-center justify-center text-gray-400 font-bold">Gambar Wuling</div>
                <div class="p-6 space-y-4">
                    <span class="text-xs font-bold bg-blue-100 text-blue-700 px-2.5 py-1 rounded">WULING</span>
                    <h3 class="text-xl font-bold">Wuling Air EV</h3>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                    <div class="text-red-600 font-black text-lg">Mulai Rp XXX Jutaan</div>
                    <a href="https://wa.me" class="block bg-red-600 text-white text-center font-bold py-2.5 rounded-lg hover:bg-red-700 transition">Hubungi Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. FOOTER -->
    <footer id="footer" class="bg-slate-900 text-gray-400 py-12 px-4 border-t border-gray-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-4">
                <h3 class="text-white text-lg font-bold">Sales Konsultan Surabaya</h3>
                <p class="text-sm max-w-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="space-y-2">
                <h4 class="text-white font-bold">Kontak Sales (Refi)</h4>
                <p class="text-sm"><i class="fa-solid fa-location-dot mr-2"></i> Area Dealer Surabaya & Sidoarjo</p>
            </div>
        </div>
    </footer>

    <!-- 5. FLOATING WHATSAPP -->
    <a href="https://wa.me" class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center text-2xl shadow-lg z-50 transition-all hover:scale-110">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Script Menu Hamburger HP -->
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon');
            menu.classList.toggle('hidden');
            if (menu.classList.contains('hidden')) {
                icon.className = "fa-solid fa-bars text-2xl";
            } else {
                icon.className = "fa-solid fa-xmark text-2xl";
            }
        }
    </script>
</body>
</html>