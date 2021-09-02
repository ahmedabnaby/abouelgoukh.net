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
                'category' => 'Accessories',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f041c5ce2b7.jpg'
            ],[
                'name' => 'USB BACK LIGHT',
                'description' => 'Bicycle rear light, its purpose: so that people behind you can see you in dark places Lighting power: 15 days Supports charging: USB',
                'category' => 'Accessories',
                'price' => '50',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ec669dc701c.jpg'
            ],[
                'name' => 'SMALL PROTECTION KIT',
                'description' => 'Protective set 2 child hand protectors 2 elbow protectors 2 knee protectors',
                'category' => 'Accessories',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ec6746c7de2.jpg'
            ],[
                'name' => 'GUANTE',
                'description' => 'Foam gloves, color: multi',
                'category' => 'Accessories',
                'price' => '50',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f042659cf89.jpg'
            ],[
                'name' => 'SILICON HEADLIGHT',
                'description' => 'Front light operated by batteries: AAA, suitable for children"s bikes',
                'category' => 'Accessories',
                'price' => '45',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef105588085.jpg'
            ],[
                'name' => 'BIG PROTECTION KIT',
                'description' => 'Protective kit 2 hand guards 2 elbow guards 2 knee guards',
                'category' => 'Accessories',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f053bd3d483.jpg'
            ],[
                'name' => 'SERVICE BELL',
                'description' => 'American bell made of aluminum',
                'category' => 'Accessories',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef150897da5.jpg'
            ],[
                'name' => 'BIKE MOBILE HOLDER',
                'description' => 'A mobile holder that can be used for bicycles and motorcycles, suitable for all sizes of mobile phones',
                'category' => 'Accessories',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef471d9b331.jpg'
            ],[
                'name' => 'FRONT + REAR LIGHT',
                'description' => 'Front + rear light, battery operated, suitable for children"s bikesدراج',
                'category' => 'Accessories',
                'price' => '35',
                'image' => 'assets/images/abouelgoukh/accessories/800_60ef48ab38d1b.jpg'
            ],[
                'name' => 'BICYCLE COVER',
                'description' => 'Adopt Terylene material, with sunscreen and rainproof function, sturdy and durable, high quality, excellent durability, suitable for bicycle, motorcycle, electric car, etc., a perfect choice for your outdoor activities. Specifications: Color: Gray Material: Terylene Weight: 373g Product size: 210 * 100cm Package size: 30 * 25.5 * 3cm Package List: 1 * Bicycle Dust Cover',
                'category' => 'Accessories',
                'price' => '135',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f03ebcb8acd.jpg'
            ],[
                'name' => 'SIRENA 1 VOTE',
                'description' => 'Battery operated 2 batteries: AAA',
                'category' => 'Accessories',
                'price' => '35',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f0572f2e9a1.jpg'
            ],[
                'name' => 'USB FLASHLIGHT',
                'description' => 'Scout with 5 different sounds 3 levels of lighting Works with charging Easy to disassemble and install',
                'category' => 'Accessories',
                'price' => '150',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f058569ca03.jpg'
            ],[
                'name' => '120CM KEY LOCK',
                'description' => 'Metal lock from the inside length 120 cm 2 computer key with holder for the lock to be needed when moving the bike to another place',
                'category' => 'Accessories',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05998caecc.jpg'
            ],[
                'name' => '120 CM NUMBER LOCK',
                'description' => 'Lock numbers length 120 cm It can be set to any number at any time 5 digits Equipped with a lock holder for his need when moving the bike to another place',
                'category' => 'Accessories',
                'price' => '95',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05a76d2e09.jpg'
            ],[
                'name' => 'COUNTER BLOWER',
                'description' => 'A blower equipped with an air pressure gauge + a ball needle + a connection to inflate the floats',
                'category' => 'Accessories',
                'price' => '250',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05d094af4e.jpg'
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'Blower used to inflate bicycles ball buoys',
                'category' => 'Accessories',
                'price' => '50',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f05e2720dc3.jpg'
            ],[
                'name' => 'L . HELMET',
                'description' => 'Large helmet suitable for an age greater than ten years, blue color',
                'category' => 'Accessories',
                'price' => '250',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f071e0901f1.jpg'
            ],[
                'name' => 'L . HELMET',
                'description' => 'Large helmet suitable for an age greater than ten years, white color',
                'category' => 'Accessories',
                'price' => '250',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f07680927f6.jpg'
            ],[
                'name' => 'BIG BLOWER',
                'description' => 'Big bike pump',
                'category' => 'Accessories',
                'price' => '100',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f077391e2a1.jpg'
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'It is suitable for all types of bikes. It is installed in the bike. It can be used for the ball + buoy. Length 28 cm',
                'category' => 'Accessories',
                'price' => '165',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f078850bdce.jpg'
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'It is suitable for all types of bikes. It is installed in the bike. It can be used for the ball + buoy. Length 30 cm',
                'category' => 'Accessories',
                'price' => '185',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f078d717628.jpg'
            ],[
                'name' => 'BOTTLE',
                'description' => 'Plastic Bicycle Bottle 650 ml',
                'category' => 'Accessories',
                'price' => '40',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f07a09b38e1.jpg'
            ],[
                'name' => 'MOBILE BAG',
                'description' => 'A bag for mobile on the bike suitable for all types of mobile has side pockets to keep keys, money, etc....',
                'category' => 'Accessories',
                'price' => '125',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f07affea33c.jpg'
            ],[
                'name' => 'NUMBER LOCK 180 CM',
                'description' => 'American Servas brand 180 cm 4 numbers and can be set to any number chosen',
                'category' => 'Accessories',
                'price' => '395',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f0804675a48.jpg'
            ],[
                'name' => 'BACK LIGHT 100 DAYS',
                'description' => 'Rear light, red light only, illumination strength is 100 days',
                'category' => 'Accessories',
                'price' => '100',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f089d3b4010.jpg'
            ],[
                'name' => '125-DAY REAR LIGHT',
                'description' => 'Rear light red light + white luminous power 125 days',
                'category' => 'Accessories',
                'price' => '125',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f089cac7bb8.jpg'
            ],[
                'name' => 'SCOUT WITH BATTERIES',
                'description' => 'Scout 3 levels of lighting, siren 5 sounds, works on batteries, comes with free batteries',
                'category' => 'Accessories',
                'price' => '75',
                'image' => 'assets/images/abouelgoukh/accessories/800_60f2e74d3d95c.jpg'
            ]
        ]);
    }
}
