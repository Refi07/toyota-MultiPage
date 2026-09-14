<?php

// 1. Redirection Storage & Cache ke /tmp (direktori sementara Vercel)
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';

// 2. Buat direktori yang dibutuhkan Laravel jika belum ada
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
];

foreach ($directories as $directory) {
    if (!file_exists($directory)) {
        mkdir($directory, 0755, true);
    }
}

// 3. Arahkan ke entrypoint utama public/index.php
require __DIR__ . '/../public/index.php';