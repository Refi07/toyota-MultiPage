<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'category_id' => 1,
                'code' => 'ELK-001',
                'name' => 'Laptop Asus VivoBook 15',
                'description' => 'Laptop 15 inch, Intel i5, RAM 8GB, SSD 512GB',
                'price' => 7500000,
                'stock' => 10,
                'unit' => 'unit',
            ],
            [
                'category_id' => 1,
                'code' => 'ELK-002',
                'name' => 'Mouse Wireless Logitech M170',
                'description' => 'Mouse wireless, baterai AA, jangkauan 10 meter',
                'price' => 165000,
                'stock' => 50,
                'unit' => 'pcs',
            ],
            [
                'category_id' => 2,
                'code' => 'ATK-001',
                'name' => 'Pulpen Pilot BPS-GP',
                'description' => 'Pulpen ballpoint hitam, tinta cepat kering',
                'price' => 5000,
                'stock' => 200,
                'unit' => 'pcs',
            ],
            [
                'category_id' => 3,
                'code' => 'MKN-001',
                'name' => 'Indomie Goreng',
                'description' => 'Mie instan goreng, 85 gram per bungkus',
                'price' => 3500,
                'stock' => 500,
                'unit' => 'bungkus',
            ]
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}