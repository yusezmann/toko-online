<?php

namespace Database\Seeders;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            "name" => "Produk A",
            "description" => "Deskripsi Produk A created by model"
        ]);
    }
}
