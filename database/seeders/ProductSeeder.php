<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'id' => 1,
                'name' => 'Sarung Tenun Wadimor',
                'type' => 'Muslim',
                'slug' => Str::slug('Sarung Tenun Wadimor'),
                'description' => 'Sarung tenun berkualitas tinggi',
                'price' => 150000,
                'quantity' => 10
            ],
            [
                'id' => 2,
                'name' => 'Baju Koko',
                'type' => 'Muslim',
                'slug' => Str::slug('Baju Koko'),
                'description' => 'Baju koko warna putih. Cocok untuk menyambut hari raya Idul Fitri',
                'price' => 235000,
                'quantity' => 16
            ]
        ]);

        Product::factory()->count(21)->create();
    }
}
