<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Urutan penting! Kategori harus dijalankan terlebih dahulu
        $this->call([
            CategorySeeder::class,
            ItemSeeder::class,
        ]);
    }
}