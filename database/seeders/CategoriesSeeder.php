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
                'name' => 'Bicycles',
                'image' => 'Untitled design.png'
            ],[
                'name' => 'Petrol Scooter',
                'image' => '800_60f2e2db467fa.jpg'
            ],[
                'name' => 'Accessories',
                'image' => '800_60f041c5ce2b7.jpg'
            ],[
                'name' => 'Kids scooter',
                'image' => '800_610d967fc8a82.png'
            ],[
                'name' => 'Sport',
                'image' => 'sports.png'
            ],[
                'name' => 'Toys',
                'image' => '800_610d956133c54.png'
            ],[
                'name' => 'Bicycle Car Holder',
                'image' => '800_610c3b9a7702b.jpg'
            ],[
                'name' => 'Beach Buggy',
                'image' => 'buggy.png'
            ],[
                'name' => '3-Wheel Electric Scooter',
                'image' => '3_wheel.png'
            ]
            ]);
    }
}
