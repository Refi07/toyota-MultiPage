

<?php $__env->startSection('content'); ?>
<div class="bg-neutral-950 text-white min-h-screen antialiased relative overflow-hidden flex items-center justify-center">

    <div class="absolute top-0 right-0 w-96 h-96 bg-red-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Hero Section Only -->
    <div class="max-w-7xl mx-auto px-6 py-20 sm:px-8 lg:px-12 flex flex-col items-center justify-center text-center relative z-10">
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
            <a href="<?php echo e(route('toyota.contact')); ?>" class="px-8 py-3.5 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg shadow-lg shadow-red-600/30 transition-all duration-300 transform hover:-translate-y-0.5 tracking-wide text-center w-full sm:w-auto">
                Minta Brosur
            </a>
            <a href="<?php echo e(route('toyota.products')); ?>" class="px-8 py-3.5 bg-slate-800/80 hover:bg-slate-700 text-slate-200 font-medium rounded-lg border border-slate-700 transition-all duration-300 text-center w-full sm:w-auto">
                Lihat Produk
            </a>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\proyek-toyota\resources\views/toyota/index.blade.php ENDPATH**/ ?>