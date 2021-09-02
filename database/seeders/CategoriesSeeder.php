<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'name' => 'Bicycles'
            ],[
                'name' => 'Petrol Scooter'
            ],[
                'name' => 'Accessories'
            ],[
                'name' => 'Kids scooter'
            ],[
                'name' => 'Sport'
            ],[
                'name' => 'Toys'
            ],[
                'name' => 'Bicycle Car Holder'
            ]
            ]);
    }
}
