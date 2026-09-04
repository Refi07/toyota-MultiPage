<nav class="bg-white shadow-md sticky top-0 z-50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo Brand -->
            <div class="flex items-center">
                <a href="<?php echo e(route('toyota.home')); ?>" class="text-2xl font-black tracking-wider uppercase font-display text-gray-900">
                    SALES<span class="text-red-600">SURABAYA</span>
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8 font-medium text-sm tracking-wide uppercase">
                <a href="<?php echo e(route('toyota.home')); ?>" 
                   class="py-2 px-1 border-b-2 <?php echo e(Request::routeIs('toyota.home') ? 'border-red-600 text-gray-900 font-bold' : 'border-transparent text-gray-500 hover:text-gray-900'); ?> transition">
                   Home
                </a>
                <a href="<?php echo e(route('toyota.about')); ?>" 
                   class="py-2 px-1 border-b-2 <?php echo e(Request::routeIs('toyota.about') ? 'border-red-600 text-gray-900 font-bold' : 'border-transparent text-gray-500 hover:text-gray-900'); ?> transition">
                   Tentang Kami
                </a>
                <a href="<?php echo e(route('toyota.products')); ?>" 
                   class="py-2 px-1 border-b-2 <?php echo e(Request::routeIs('toyota.products') ? 'border-red-600 text-gray-900 font-bold' : 'border-transparent text-gray-500 hover:text-gray-900'); ?> transition">
                   Produk
                </a>
                <a href="<?php echo e(route('toyota.promo')); ?>" 
                   class="py-2 px-1 border-b-2 <?php echo e(Request::routeIs('toyota.promo') ? 'border-red-600 text-gray-900 font-bold' : 'border-transparent text-gray-500 hover:text-gray-900'); ?> transition">
                   Promo
                </a>
                <a href="<?php echo e(route('toyota.faq')); ?>" 
                   class="py-2 px-1 border-b-2 <?php echo e(Request::routeIs('toyota.faq') ? 'border-red-600 text-gray-900 font-bold' : 'border-transparent text-gray-500 hover:text-gray-900'); ?> transition">
                   FAQ
                </a>
                <a href="<?php echo e(route('toyota.contact')); ?>" 
                   class="bg-zinc-900 text-white px-5 py-2.5 rounded hover:bg-zinc-800 transition shadow <?php echo e(Request::routeIs('toyota.contact') ? 'ring-2 ring-red-600' : ''); ?>">
                   Kontak
                </a>
            </div>

            <!-- Tombol Mobile Menu Hamburger -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" class="text-gray-500 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Tampilan Mobile -->
    <div x-show="open" x-cloak class="md:hidden bg-white border-t border-gray-100 py-3 space-y-1 font-medium tracking-wide uppercase" @click.away="open = false">
        <a href="<?php echo e(route('toyota.home')); ?>" 
           class="block px-4 py-2.5 <?php echo e(Request::routeIs('toyota.home') ? 'bg-red-50 text-red-600 font-bold' : 'text-gray-600'); ?>">
           Home
        </a>
        <a href="<?php echo e(route('toyota.about')); ?>" 
           class="block px-4 py-2.5 <?php echo e(Request::routeIs('toyota.about') ? 'bg-red-50 text-red-600 font-bold' : 'text-gray-600'); ?>">
           Tentang Kami
        </a>
        <a href="<?php echo e(route('toyota.products')); ?>" 
           class="block px-4 py-2.5 <?php echo e(Request::routeIs('toyota.products') ? 'bg-red-50 text-red-600 font-bold' : 'text-gray-600'); ?>">
           Produk
        </a>
        <a href="<?php echo e(route('toyota.promo')); ?>" 
           class="block px-4 py-2.5 <?php echo e(Request::routeIs('toyota.promo') ? 'bg-red-50 text-red-600 font-bold' : 'text-gray-600'); ?>">
           Promo
        </a>
        <a href="<?php echo e(route('toyota.faq')); ?>" 
           class="block px-4 py-2.5 <?php echo e(Request::routeIs('toyota.faq') ? 'bg-red-50 text-red-600 font-bold' : 'text-gray-600'); ?>">
           FAQ
        </a>
        <a href="<?php echo e(route('toyota.contact')); ?>" @click="open = false" 
           class="block mx-4 my-2 text-center bg-zinc-900 text-white py-2 rounded shadow">
           Kontak
        </a>
    </div>
</nav><?php /**PATH C:\laragon\www\proyek-toyota\resources\views/partials/navbar.blade.php ENDPATH**/ ?>