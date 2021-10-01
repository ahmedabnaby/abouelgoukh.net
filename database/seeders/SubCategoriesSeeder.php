<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_categories')->insert([
            [
                'name' => 'Kids Bikes',
                'image' => 'assets/images/abouelgoukh/800_5fd8f7febbbcc.jpg',
                'category_id' => '1'
            ],[
                'name' => 'Mountain Bikes',
                'image' => 'assets/images/abouelgoukh/800_5e4dda4e0df9a.jpg',
                'category_id' => '1'
            ],[
                'name' => 'Racing Bikes',
                'image' => 'assets/images/abouelgoukh/800_5cdc41fe125ca.jpg',
                'category_id' => '1'
            ],[
                'name' => 'Hybird Bikes',
                'image' => 'assets/images/abouelgoukh/800_5ebbee66d545d.jpg',
                'category_id' => '1'
            ]
            ]);
    }
}
