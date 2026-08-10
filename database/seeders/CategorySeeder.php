<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Elektronik', 'description' => 'Barang-barang elektronik dan gadget'],
            ['name' => 'Alat Tulis', 'description' => 'Perlengkapan kantor dan alat tulis'],
            ['name' => 'Makanan', 'description' => 'Produk makanan dan minuman'],
            ['name' => 'Perabotan', 'description' => 'Perabotan dan furniture'],
            ['name' => 'Pakaian', 'description' => 'Produk pakaian dan fashion'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}