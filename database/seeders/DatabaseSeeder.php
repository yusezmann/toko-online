<?php

use Illuminate\Database\Eloquent\Model;
use Database\Seeders\CategoryTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        // $this->call(ProductTableSeeder::class);

        $this->call(CategoryTableSeeder::class);
    }
}
