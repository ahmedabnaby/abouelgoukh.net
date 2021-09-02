<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            [
                'name' => 'KIDS HELMET',
                'description' => 'Helmet for children to protect the child from shocks in the head area, suitable from the age of 5 to 10 years, the color is red',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f041c5ce2b7.jpg',
                'category_id' => '3'
            ],[
                'name' => 'USB BACK LIGHT',
                'description' => 'Bicycle rear light, its purpose: so that people behind you can see you in dark places Lighting power: 15 days Supports charging: USB',
                'price' => '50',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ec669dc701c.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SMALL PROTECTION KIT',
                'description' => 'Protective set 2 child hand protectors 2 elbow protectors 2 knee protectors',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ec6746c7de2.jpg',
                'category_id' => '3'
            ],[
                'name' => 'GUANTE',
                'description' => 'Foam gloves, color: multi',
                'price' => '50',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f042659cf89.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SILICON HEADLIGHT',
                'description' => 'Front light operated by batteries: AAA, suitable for children"s bikes',
                'price' => '45',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef105588085.jpg',
                'category_id' => '3'
            ],[
                'name' => 'BIG PROTECTION KIT',
                'description' => 'Protective kit 2 hand guards 2 elbow guards 2 knee guards',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f053bd3d483.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SERVICE BELL',
                'description' => 'American bell made of aluminum',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef150897da5.jpg',
                'category_id' => '3'
            ],[
                'name' => 'BIKE MOBILE HOLDER',
                'description' => 'A mobile holder that can be used for bicycles and motorcycles, suitable for all sizes of mobile phones',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef471d9b331.jpg',
                'category_id' => '3'
            ],[
                'name' => 'FRONT + REAR LIGHT',
                'description' => 'Front + rear light, battery operated, suitable for children"s bikesدراج',
                'price' => '35',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef48ab38d1b.jpg',
                'category_id' => '3'
            ],[
                'name' => 'BICYCLE COVER',
                'description' => 'Adopt Terylene material, with sunscreen and rainproof function, sturdy and durable, high quality, excellent durability, suitable for bicycle, motorcycle, electric car, etc., a perfect choice for your outdoor activities. Specifications: Color: Gray Material: Terylene Weight: 373g Product size: 210 * 100cm Package size: 30 * 25.5 * 3cm Package List: 1 * Bicycle Dust Cover',
                'price' => '135',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f03ebcb8acd.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SIRENA 1 VOTE',
                'description' => 'Battery operated 2 batteries: AAA',
                'price' => '35',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f0572f2e9a1.jpg',
                'category_id' => '3'
            ],[
                'name' => 'USB FLASHLIGHT',
                'description' => 'Scout with 5 different sounds 3 levels of lighting Works with charging Easy to disassemble and install',
                'price' => '150',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f058569ca03.jpg',
                'category_id' => '3'
            ],[
                'name' => '120CM KEY LOCK',
                'description' => 'Metal lock from the inside length 120 cm 2 computer key with holder for the lock to be needed when moving the bike to another place',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05998caecc.jpg',
                'category_id' => '3'
            ],[
                'name' => '120 CM NUMBER LOCK',
                'description' => 'Lock numbers length 120 cm It can be set to any number at any time 5 digits Equipped with a lock holder for his need when moving the bike to another place',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05a76d2e09.jpg',
                'category_id' => '3'
            ],[
                'name' => 'COUNTER BLOWER',
                'description' => 'A blower equipped with an air pressure gauge + a ball needle + a connection to inflate the floats',
                'price' => '250',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05d094af4e.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'Blower used to inflate bicycles ball buoys',
                'price' => '50',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05e2720dc3.jpg',
                'category_id' => '3'
            ],[
                'name' => 'L . HELMET',
                'description' => 'Large helmet suitable for an age greater than ten years, blue color',
                'price' => '250',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f071e0901f1.jpg',
                'category_id' => '3'
            ],[
                'name' => 'L . HELMET',
                'description' => 'Large helmet suitable for an age greater than ten years, white color',
                'price' => '250',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f07680927f6.jpg',
                'category_id' => '3'
            ],[
                'name' => 'BIG BLOWER',
                'description' => 'Big bike pump',
                'price' => '100',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f077391e2a1.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'It is suitable for all types of bikes. It is installed in the bike. It can be used for the ball + buoy. Length 28 cm',
                'price' => '165',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f078850bdce.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'It is suitable for all types of bikes. It is installed in the bike. It can be used for the ball + buoy. Length 30 cm',
                'price' => '185',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f078d717628.jpg',
                'category_id' => '3'
            ],[
                'name' => 'BOTTLE',
                'description' => 'Plastic Bicycle Bottle 650 ml',
                'price' => '40',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f07a09b38e1.jpg',
                'category_id' => '3'
            ],[
                'name' => 'MOBILE BAG',
                'description' => 'A bag for mobile on the bike suitable for all types of mobile has side pockets to keep keys, money, etc....',
                'price' => '125',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f07affea33c.jpg',
                'category_id' => '3'
            ],[
                'name' => 'NUMBER LOCK 180 CM',
                'description' => 'American Servas brand 180 cm 4 numbers and can be set to any number chosen',
                'price' => '395',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f0804675a48.jpg',
                'category_id' => '3'
            ],[
                'name' => 'BACK LIGHT 100 DAYS',
                'description' => 'Rear light, red light only, illumination strength is 100 days',
                'price' => '100',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f089d3b4010.jpg',
                'category_id' => '3'
            ],[
                'name' => '125-DAY REAR LIGHT',
                'description' => 'Rear light red light + white luminous power 125 days',
                'price' => '125',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f089cac7bb8.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SCOUT WITH BATTERIES',
                'description' => 'Scout 3 levels of lighting, siren 5 sounds, works on batteries, comes with free batteries',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f2e74d3d95c.jpg',
                'category_id' => '3'
            ],[
                'name' => 'SCOUT WITH BATTERIES',
                'description' => 'Scout 3 levels of lighting, siren 5 sounds, works on batteries, comes with free batteries',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f2e74d3d95c.jpg',
                'category_id' => '3'
            ]
        ]);
    }
}
