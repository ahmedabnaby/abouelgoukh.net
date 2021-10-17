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
                'status' => '0',
                'routeName' => 'bicycles',
                'image' => 'Untitled design.png'
            ],[
                'name' => 'Petrol Scooter',
                'status' => '0',
                'routeName' => 'scooters',
                'image' => '800_60f2e2db467fa.jpg'
            ],[
                'name' => 'Accessories',
                'status' => '0',
                'routeName' => 'accessories',
                'image' => '800_60f041c5ce2b7.jpg'
            ],[
                'name' => 'Kids scooter',
                'status' => '0',
                'routeName' => 'kids_scooter',
                'image' => '800_610d967fc8a82.png'
            ],[
                'name' => 'Sport',
                'status' => '0',
                'routeName' => 'sports',
                'image' => 'sports.png'
            ],[
                'name' => 'Toys',
                'status' => '0',
                'routeName' => 'toys',
                'image' => '800_610d956133c54.png'
            ],[
                'name' => 'Bicycle Car Holder',
                'status' => '0',
                'routeName' => 'car_holders',
                'image' => '800_610c3b9a7702b.jpg'
            ],[
                'name' => 'Beach Buggy',
                'status' => '0',
                'routeName' => 'buggy',
                'image' => 'buggy.png'
            ],[
                'name' => '3-Wheel Electric Scooter',
                'status' => '0',
                'routeName' => 'electric_scooter',
                'image' => '3_wheel.png'
            ]
            ]);
    }
}
