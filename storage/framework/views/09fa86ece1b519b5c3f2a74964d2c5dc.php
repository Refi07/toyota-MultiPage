<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Landing Page Sales'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'Landing page penjualan mobil'); ?>">

    
    <script src="https://cdn.tailwindcss.com"></script>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Barlow+Condensed:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        :root {
            --brand-primary: <?php echo e($brandColor ?? '#C8102E'); ?>;
            --brand-primary-dark: <?php echo e($brandColorDark ?? '#9c0c23'); ?>;
            --brand-dark: <?php echo e($brandDark ?? '#101010'); ?>;
            --brand-accent: <?php echo e($brandAccent ?? '#00C2CB'); ?>;
        }
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: '<?php echo e($displayFont ?? 'Poppins'); ?>', sans-serif; }
        .text-brand { color: var(--brand-primary); }
        .bg-brand { background-color: var(--brand-primary); }
        .bg-brand-dark { background-color: var(--brand-dark); }
        .border-brand { border-color: var(--brand-primary); }
        .hover\:bg-brand-dark:hover { background-color: var(--brand-primary-dark); }
        [x-cloak] { display: none !important; }
        html { scroll-padding-top: 88px; }
    </style>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="bg-white text-slate-800 antialiased">

    <?php echo $__env->make('partials.navbar', ['brand' => $brand], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', ['brand' => $brand], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('partials.whatsapp-float', ['brand' => $brand], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\laragon\www\proyek-sales\resources\views/layouts/app.blade.php ENDPATH**/ ?>