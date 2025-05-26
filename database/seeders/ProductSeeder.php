<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'code' => 'PRD_001',
                'name' => 'Mouse inalámbrico Logitech',
                'ammount' => 50,
                'unit' => 'unidad',
                'price' => 45000,
            ],
            [
                'code' => 'PRD_002',
                'name' => 'Teclado mecánico RGB',
                'ammount' => 30,
                'unit' => 'unidad',
                'price' => 120000,
            ],
            [
                'code' => 'PRD_003',
                'name' => 'Monitor 24 pulgadas Full HD',
                'ammount' => 20,
                'unit' => 'unidad',
                'price' => 520000,
            ],
            [
                'code' => 'PRD_004',
                'name' => 'Disco SSD 512GB NVMe',
                'ammount' => 40,
                'unit' => 'unidad',
                'price' => 250000,
            ],
            [
                'code' => 'PRD_005',
                'name' => 'Cable HDMI 2.0 de 2 metros',
                'ammount' => 100,
                'unit' => 'unidad',
                'price' => 15000,
            ],
        ]);
        // Product::factory()->count(10)->create();
    }
}
