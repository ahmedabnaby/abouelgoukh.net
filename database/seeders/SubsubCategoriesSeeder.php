<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubsubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subsub_categories')->insert([
            [
                'name' => "26 '' bikes",
                'image' => 'noImageColor.jpg',
                'sub_category_id' => '1'
            ],[
                'name' => '29-Inch Bicycles',
                'image' => 'noImageColor.jpg',
                'sub_category_id' => '1'
            ],[
                'name' => "24 '' Steps",
                'image' => '800_61192bc4bd562.jpg',
                'sub_category_id' => '4'
            ],[
                'name' => "20 '' Bikes",
                'image' => '800_611185d130d1a.jpg',
                'sub_category_id' => '4'
            ],[
                'name' => '16-Inch Bikes',
                'image' => '800_61117a9b331b6.jpg',
                'sub_category_id' => '4'
            ],[
                'name' => '12-Inch Bikes',
                'image' => '800_611170591de36.jpg',
                'sub_category_id' => '4'
            ]
            ]);
    }
}
