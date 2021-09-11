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
                'image' => '800_60f041c5ce2b7.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'USB BACK LIGHT',
                'description' => 'Bicycle rear light, its purpose: so that people behind you can see you in dark places Lighting power: 15 days Supports charging: USB',
                'price' => '50',
                'image' => '800_60ec669dc701c.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SMALL PROTECTION KIT',
                'description' => 'Protective set 2 child hand protectors 2 elbow protectors 2 knee protectors',
                'price' => '75',
                'image' => '800_60ec6746c7de2.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'GUANTE',
                'description' => 'Foam gloves, color: multi',
                'price' => '50',
                'image' => '800_60f042659cf89.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SILICON HEADLIGHT',
                'description' => 'Front light operated by batteries: AAA, suitable for children"s bikes',
                'price' => '45',
                'image' => '800_60ef105588085.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'BIG PROTECTION KIT',
                'description' => 'Protective kit 2 hand guards 2 elbow guards 2 knee guards',
                'price' => '95',
                'image' => '800_60f053bd3d483.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SERVICE BELL',
                'description' => 'American bell made of aluminum',
                'price' => '95',
                'image' => '800_60ef150897da5.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'BIKE MOBILE HOLDER',
                'description' => 'A mobile holder that can be used for bicycles and motorcycles, suitable for all sizes of mobile phones',
                'price' => '75',
                'image' => '800_60ef471d9b331.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'FRONT + REAR LIGHT',
                'description' => 'Front + rear light, battery operated, suitable for children"s bikesدراج',
                'price' => '35',
                'image' => '800_60ef48ab38d1b.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'BICYCLE COVER',
                'description' => 'Adopt Terylene material, with sunscreen and rainproof function, sturdy and durable, high quality, excellent durability, suitable for bicycle, motorcycle, electric car, etc., a perfect choice for your outdoor activities. Specifications: Color: Gray Material: Terylene Weight: 373g Product size: 210 * 100cm Package size: 30 * 25.5 * 3cm Package List: 1 * Bicycle Dust Cover',
                'price' => '135',
                'image' => '800_60f03ebcb8acd.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SIRENA 1 VOTE',
                'description' => 'Battery operated 2 batteries: AAA',
                'price' => '35',
                'image' => '800_60f0572f2e9a1.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'USB FLASHLIGHT',
                'description' => 'Scout with 5 different sounds 3 levels of lighting Works with charging Easy to disassemble and install',
                'price' => '150',
                'image' => '800_60f058569ca03.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => '120CM KEY LOCK',
                'description' => 'Metal lock from the inside length 120 cm 2 computer key with holder for the lock to be needed when moving the bike to another place',
                'price' => '75',
                'image' => '800_60f05998caecc.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => '120 CM NUMBER LOCK',
                'description' => 'Lock numbers length 120 cm It can be set to any number at any time 5 digits Equipped with a lock holder for his need when moving the bike to another place',
                'price' => '95',
                'image' => '800_60f05a76d2e09.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'COUNTER BLOWER',
                'description' => 'A blower equipped with an air pressure gauge + a ball needle + a connection to inflate the floats',
                'price' => '250',
                'image' => '800_60f05d094af4e.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'Blower used to inflate bicycles ball buoys',
                'price' => '50',
                'image' => '800_60f05e2720dc3.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'L . HELMET',
                'description' => 'Large helmet suitable for an age greater than ten years, blue color',
                'price' => '250',
                'image' => '800_60f071e0901f1.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'L . HELMET',
                'description' => 'Large helmet suitable for an age greater than ten years, white color',
                'price' => '250',
                'image' => '800_60f07680927f6.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'BIG BLOWER',
                'description' => 'Big bike pump',
                'price' => '100',
                'image' => '800_60f077391e2a1.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'It is suitable for all types of bikes. It is installed in the bike. It can be used for the ball + buoy. Length 28 cm',
                'price' => '165',
                'image' => '800_60f078850bdce.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SMALL BLOWER',
                'description' => 'It is suitable for all types of bikes. It is installed in the bike. It can be used for the ball + buoy. Length 30 cm',
                'price' => '185',
                'image' => '800_60f078d717628.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'BOTTLE',
                'description' => 'Plastic Bicycle Bottle 650 ml',
                'price' => '40',
                'image' => '800_60f07a09b38e1.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'MOBILE BAG',
                'description' => 'A bag for mobile on the bike suitable for all types of mobile has side pockets to keep keys, money, etc....',
                'price' => '125',
                'image' => '800_60f07affea33c.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'NUMBER LOCK 180 CM',
                'description' => 'American Servas brand 180 cm 4 numbers and can be set to any number chosen',
                'price' => '395',
                'image' => '800_60f0804675a48.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'BACK LIGHT 100 DAYS',
                'description' => 'Rear light, red light only, illumination strength is 100 days',
                'price' => '100',
                'image' => '800_60f089d3b4010.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => '125-DAY REAR LIGHT',
                'description' => 'Rear light red light + white luminous power 125 days',
                'price' => '125',
                'image' => '800_60f089cac7bb8.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SCOUT WITH BATTERIES',
                'description' => 'Scout 3 levels of lighting, siren 5 sounds, works on batteries, comes with free batteries',
                'price' => '75',
                'image' => '800_60f2e74d3d95c.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null
            ],[
                'name' => 'SCOUT WITH BATTERIES',
                'description' => 'Scout 3 levels of lighting, siren 5 sounds, works on batteries, comes with free batteries',
                'price' => '75',
                'image' => '800_60f2e74d3d95c.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '3',
                'subsub_category_id' => null,
            ],[
                'name' => 'Bike size 24 brand Kisto',
                'description' => 'Bike 24 Kisto Front Auxiliary Disc Brake Front + Rear 21 Speed Metal Type Iron',
                'price' => '2750',
                'image' => '800_61192bc4bd562.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '3'
            ],[
                'name' => '24 TRINX CITY BIKE',
                'description' => "Trinx bike, size 24, girls' bike, metal type: iron, with parts made of aluminum, suitable from 10 to 14 years old",
                'price' => '2650',
                'image' => '800_611bef2a2e993.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '3'
            ],[
                'name' => 'HADOR BIKE 24',
                'description' => "Bicycle size 24, brand Hador, color orange, model steer, made of aluminum, 21 saddles, brand a2, front tire, easy to remove and install",
                'price' => '3250',
                'image' => '800_611d4313c1dcd.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '3'
            ],[
                'name' => 'BICYCLE 20 BRAND ZOOM',
                'description' => "Bicycle 20 brand Zoom iron color black in red in blue speeds Shimano brand 21 speed front assistant to absorb bumps and shocks front + rear disc brakes for ages from 7 to 9 years",
                'price' => '2500',
                'image' => '800_611185d130d1a.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => 'BICYCLE 20 BRAND ZOOM',
                'description' => "Bicycle 20 brand Zoom color black in green in blue Iron Shimano brand speeds 21 speed front assistant to absorb bumps and shocks front + rear disc brakes for ages from 7 to 9 years",
                'price' => '2500',
                'image' => '800_6111866ada328.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => 'BICYCLE 20 BRAND TOTEM',
                'description' => "Bicycle 20 brand Zoom aluminum color blue Shimano brand speeds 21 speed front assist + rear to absorb bumps and shocks Balance brakes suitable for ages from 7 to 9 years",
                'price' => '2650',
                'image' => '800_611187851f4ed.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => 'BICYCLE 20 BRAND TOTEM',
                'description' => "Bicycle 20 brand most iron color black F green 21 speed front + rear to absorb bumps and shocks Balance brakes suitable for age from 7 to 9 years",
                'price' => '1950',
                'image' => '800_61191efaa2d3e.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => '20 RODEO BIKE',
                'description' => "Rodeo Bike 20 brand Mini Rider bike, black in green, Taiwanese brand from China factories",
                'price' => '2430',
                'image' => '800_61192187bb477.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => '20 RODEO BIKE',
                'description' => "Rodeo Bike Brand Hummer 20 bike, light blue color, Taiwanese brand, from China factories",
                'price' => '2490',
                'image' => '800_611923d4701ee.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => '20 RODEO BIKE',
                'description' => "Bicycle 20 brand Rodeo Bike Model Chita The color is black, blue and pink, a Taiwanese brand from China factories Specifications: Metal type: Auxiliary iron: Yes Speeds: No Brake type: Front disc only Suitable for ages from 7 to 9 years",
                'price' => '2490',
                'image' => '800_611924906fc1d.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => '20 RODEO BIKE',
                'description' => "Bicycle 20 brand Rodeo Bike Model Chita The color is black, blue and pink, a Taiwanese brand from China factories Specifications: Metal type: Auxiliary iron: Yes Speeds: No Brake type: Front disc only Suitable for ages from 7 to 9 years",
                'price' => '2490',
                'image' => '800_611924906fc1d.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '4'
            ],[
                'name' => 'BICYCLE SIZE 16 BRAND KARKURA',
                'description' => "Children's bike, size 16, color orange, suitable from 4 years to 7 years old",
                'price' => '1450',
                'image' => '800_61117a9b331b6.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '5'
            ],[
                'name' => 'BICYCLE SIZE 16 BRAND KARKURA',
                'description' => "Children's bike, size 16, black and red, suitable from 4 to 7 years old",
                'price' => '1450',
                'image' => '800_61117df429d5c.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '5'
            ],[
                'name' => 'FERRARI BIKE SIZE 16',
                'description' => "Children's bike, size 16, red and black, Ferrari model, suitable from 4 years old to 7 years old",
                'price' => '1450',
                'image' => '800_611180e983226.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '5'
            ],[
                'name' => 'BIKE SIZE 16 BRAND REDO BIKE',
                'description' => "Children's bike size 16, black and green, hot speed model, suitable from 4 to 7 years old",
                'price' => '1790',
                'image' => '800_611183c5110ac.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '5'
            ],[
                'name' => 'AERO BIKE SIZE 16',
                'description' => "Children's bike, size 16, orange in black, suitable from 4 to 7 years old",
                'price' => '1450',
                'image' => '800_61117f3de3f31.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '5'
            ],[
                'name' => 'BICYCLE SIZE 12 BARBIE',
                'description' => "Children's bike, size 12, pink, model Barbie, suitable from 3 years to 5 years old",
                'price' => '1250',
                'image' => '800_611170591de36.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '6'
            ],[
                'name' => 'FERRARI 12 BIKE',
                'description' => "Kids bike size 12 yellow color Ferrari model suitable from 3 years to 5 years old",
                'price' => '1250',
                'image' => '800_6111722488a9f.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '6'
            ],[
                'name' => 'BIKE SIZE 12 REDO BIKE',
                'description' => "Children's bike, size 12, the Taiwanese Rideau Bike brand, orange in black, model Iron Man, suitable from 3 to 5 years old",
                'price' => '1650',
                'image' => '800_6111727e56608.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '6'
            ],[
                'name' => 'FERRARI 12 BIKE',
                'description' => "Children's bike, size 12, red color, Ferrari model, suitable from 3 to 5 years old",
                'price' => '1250',
                'image' => '800_611176d48c833.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '6'
            ],[
                'name' => 'BIKE SIZE 12 REDO BIKE',
                'description' => "Children's bike size 12, Taiwanese Rideau Bike brand, color A, model BX, suitable from 3 to 5 years old",
                'price' => '1650',
                'image' => '800_6111776a0d75e.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '6'
            ],[
                'name' => 'BALANCE BIKE FOR DRIVING LESSONS',
                'description' => "Balance bike for children's education, size 12, suitable from 4 to 6 years old",
                'price' => '895',
                'image' => '800_611178f1e4d9b.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '1',
                'subsub_category_id' => '6'
            ],[
                'name' => 'EGOS KELLY 150 - 2021',
                'description' => "Egos Kelly 150 - 2021 model, cash price 22450 pounds - special discount for a limited time 2950 pounds on cash sale only Price after discount 19500 specifications Climbing angle: 15 degrees to 20 degrees with fixed torque Front brake: Oil pressure disc Rear brake: Drum Battery type Lead acid battery Battery capacity: 7 Ah Battery voltage 12V Engine type: Latest version CVT 150cc GY7 Engine power: 8.3 kW (11.19 HP) Engine torque: 10.78 Nm At 6500 rpm LED Tail Light: Yes LED Headlight: Yes Alarm: Yes Remote Control: Yes MP3: Yes Front Windscreen: Yes Body Size: (L*W*H): 1890*68*1100mm Wheelbase: 1278 mm Wheel size: 3.5-10 or 90-90-10 Payload: 150 kg Seat height: 810 mm Double rear assist, dual front shock assist.",
                'price' => '19500',
                'image' => '800_60f2e2db467fa.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '2',
                'subsub_category_id' => null
            ],[
                'name' => 'EGOS MONOD 150 - 2021',
                'description' => "Egos Monod 150 - Model 2021 Cache price 19500 pounds - special discount for a limited time 2550 pounds on cash sale only Price after discount 16950 Specifications Climb angle: 15 degrees to 20 degrees with constant torque Front brake: Oil pressure disc (Bumper) Rear brake: drum type Battery Battery Acid + Lead Battery Capacity: 7 Ah Battery voltage 12 V Engine type: Latest version CVT 150cc GY7 Engine Power: 8.3 kW (11.19 HP) Engine torque: 10.78 Nm at 6500 rpm Tail light: 35 W Headlight Front LED: Yes Alarm: Yes Remote Control: Yes MP3: Yes USB: Yes Front Wind Deflector: Yes Body Size: (L*W*H): 1760*68*1050mm Wheelbase: 1260mm Size Wheel: 3.5-10 Payload: 150 kg Seat height: 780 mm Double rear assist, dual front shock assist. Colors: blue - white - black - red",
                'price' => '16950',
                'image' => '800_60ef6d0388a63.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '2',
                'subsub_category_id' => null
            ],[
                'name' => 'EGOS AMID 200 – 2021',
                'description' => "المواصفات:
                زاوية التسلق: 15 درجة إلى 20 درجة بعزم ثابت
                الفرامل الأمامية: قرص بضغط الزيت (باكم)
                الفرامل الخلفية: قرص بضغط الزيت (باكم)
                نوع البطارية بطارية حمض + الرصاص
                سعة البطارية: 7 أو 9 أمبير
                جهد البطارية 12 فولت
                نوع المحرك: أحدث إصدار محرك CVT 175cc GY7
                قوة المحرك: 9,3 كيلو واط (12,53 حصان)
                عزم المحرك: 11,70 نيوتن متر عند 6500 دورة في الدقيقة
                ضوء الذيل (الفانوس الخلفى) 35 واط و55 واط
                المصباح الأمامى LED: نعم
                إنذار: نعم
                جهاز التحكم عن بعد: نعم
                إم بى 3: نعم
                يو إس بى: نعم
                واقى رياح أمامي: نعم
                حجم الجسم: (طول*عرض*إرتفاع): 1960*690*1100مم
                قاعدة العجلات: 1260 ملم
                حجم العجلة: 120-70-12
                إطارات 60% مطاط 40% كربون بعمر إفتراضى 30000 كيلومتر.
                جنوط ألومنيوم مجهزة للطرق الغير ممهدة.
                الحمولة: 150 كجم
                ارتفاع المقعد: 780 ملم
                مساعدخلفي مزدوج ،
                مساعد صدمات أمامي هيدروليكى مزدوج .
                الألوان: بنى – أبيض – أسود - أصفر",
                'price' => '21950',
                'image' => '800_60f2e39e467e1.png',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '2',
                'subsub_category_id' => null
            ],[
                'name' => 'EGOS FORCE 200 - 2021',
                'description' => "Egos Force 200 - 2021 model, cache price 28700 pounds - special discount for a limited time on the cache only 3750 pounds price after discount 24950 Climbing angle: 15 degrees or 20 degrees Front brake: oil pressure disc Rear brake: oil pressure disc Battery type Acid + lead battery Battery capacity: 7 or 9 Ah Battery voltage 12 V Engine type: Latest version CVT 175cc GY7 Engine Power: 9.3 kW (12.53 hp) Engine torque: 11.70 Nm at 6500 rpm LED tail light : Yes Headlight LED: Yes Alarm: Yes Remote Control: Yes MP3: Yes Front Wind Deflector: Yes Body Size: (L*W*H): 2010*780*1100 mm Wheelbase: 1283 mm Wheel Size: 130-60-13 Payload: 150 kg Seat height: 810 mm Double rear assist, dual front shock assist. Colors: blue - gray - white - orange - yellow",
                'price' => '24950',
                'image' => '800_60f2ca93bc924.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '2',
                'subsub_category_id' => null
            ],[
                'name' => 'EGOS CRUISER 200 – 2021',
                'description' => "Egos Cruiser 200 - Model 2021 Cache price 33950 pounds - special discount for a limited time on the cache only 4450 pounds Price after discount 29500 Specifications Climb angle: 15 degrees to 20 degrees with fixed torque Front brakes: oil pressure disc Rear brakes: oil pressure disc (PACM) Battery Type Lead Acid Battery Battery Capacity: 7 or 9 Ah Battery Voltage 12V Engine Type: Latest Version CVT 175cc GY7 Engine Power: 9.3 kW (12.53 hp) Engine Torque: 11.70 Nm Meter at 6500 rpm Tail Light (Tail Lights) LED: Yes Headlight LED: Yes Alarm: Yes Remote Control: Yes MP3: Yes Front Windscreen: Yes Body Size: (L*W*H): 1960*880*2110mm Wheelbase: 1285mm Wheel Size: 130-60-13 Payload: 150kg Seat Height: 810mm Double Auxiliary Rear.",
                'price' => '29500',
                'image' => '800_60f2e50d93ba7.png',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '2',
                'subsub_category_id' => null
            ],[
                'name' => 'EGOS TITAN 200 – 2021 MODEL',
                'description' => "Egos Titan 200 - 2021 model, cache price 39750 pounds - special discount for a limited time on cash only 4800 pounds price after discount 34950 Specifications Climbing angle: 15 degrees to 20 degrees with fixed torque Front brakes: oil pressure disc Rear brake: oil pressure disc (PACM) Battery Type Lead Acid Battery Battery Capacity: 7 or 9 Ah Battery Voltage 12V Engine Type: Latest Version CVT 175cc GY7 Engine Air Cooled. Engine power: 9.3 kW (12.53 hp) Engine torque: 11.70 Nm at 6500 rpm Tail light (rear lantern) LED: Yes Headlight LED: Yes Alarm: Yes Remote control: Yes MP3: Yes Front windscreen: Yes Body size: (L*W*H): 2240*810*2110 mm Wheelbase: 1285 mm Wheel size: 130-60-13 Payload: 150 kg Seat height: 800 mm Double Auxiliary Rear . Dual front shock assist. Colors: black - brown * black - white * black",
                'price' => '34950',
                'image' => '800_60f2e600d4fc9.png',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '2',
                'subsub_category_id' => null
            ],[
                'name' => 'IRON JIM',
                'description' => '',
                'price' => '275',
                'image' => '800_60f2ea4818151.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '6',
                'subsub_category_id' => null
            ],[
                'name' => 'AQLA',
                'description' => '',
                'price' => '150',
                'image' => '800_60f2ea74b2c3c.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '6',
                'subsub_category_id' => null
            ],[
                'name' => 'CHINESE CAR HOLDER',
                'description' => 'Chinese car holder for a load of 2 bikes of all sizes, easy to disassemble and install, equipped with rubber bases to not hurt the car',
                'price' => '500',
                'image' => '800_60f04e4d03e98.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'category_id' => '7',
                'subsub_category_id' => null
            ],[
                'name' => 'Linhai 150CC Auto',
                'description' => '',
                'price' => '55000',
                'image' => 'buggy12.jpeg',                
                'image2' => 'buggy1.jpeg',
                'image3' => 'buggy13.jpeg',
                'image4' => 'buggy14.jpeg',
                'category_id' => '8',
                'subsub_category_id' => null
            ],[
                'name' => 'Linhai 300CC 4X4',
                'description' => 'Warranty 6 months',
                'price' => '95000',
                'image' => 'buggy23.jpeg',                
                'image2' => 'buggy2.jpeg',
                'image3' => 'buggy22.jpeg',
                'image4' => '',
                'category_id' => '8',
                'subsub_category_id' => null
            ],[
                'name' => 'Segway 570CC',
                'description' => 'Warranty 2 Years',
                'price' => '180000',
                'image' => 'buggy32.jpeg',                
                'image2' => 'buggy3.jpeg',
                'image3' => 'buggy33.jpeg',
                'image4' => '',
                'category_id' => '8',
                'subsub_category_id' => null
            ]
            
        ]);
    }
}
