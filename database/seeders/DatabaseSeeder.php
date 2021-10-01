<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(SubCategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
