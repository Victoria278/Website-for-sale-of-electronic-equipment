<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Apple iPhone 12 Pro 128 GB',
                'code' => 'iphone_12',
                'description' => 'Тотальна перевага A14 Bionic — перший процесор iPhone, створений із застосуванням 5-нанометрової технології. Його передові компоненти за розміром можна порівняти з атомами.',
                'price' => '41000',
                'category_id' => 1,
                'image' => 'products/iphone_12_128.jpg',
            ],
            [
                'name' => 'Apple iPhone 11 64 GB Black',
                'code' => 'iphone_11_64',
                'description' => 'iPhone 11 ще краще захищений від води*: він витримує занурення на глибину до 2 метрів тривалістю до 30 хвилин — удвічі глибше, ніж iPhone XR',
                'price' => '22000',
                'category_id' => 1,
                'image' => 'products/iphone_11_64.jpg',
            ],
            [
                'name' => 'Apple iPhone SE 64 GB 2020',
                'code' => 'iphone_se_64',
                'description' => 'Передові камери та процесор A13 Bionic працюють разом, щоб у вас виходили гарні фото з художньо розмитим фоном, — зокрема селфі',
                'price' => '15000',
                'category_id' => 1,
                'image' => 'products/iphone_se_64.jpg',
            ],
            [
                'name' => 'Samsung Galaxy A72 6/128',
                'code' => 'samsung_galaxy_a72_6/128',
                'description' => 'ОСтаньте ближче до того, що важливо для вас з 6,7-дюймовим екраном Infinity-O Galaxy A72',
                'price' => '13000',
                'category_id' => 1,
                'image' => 'products/samsung_galaxy_a72_6_128.jpg',
            ],
            [
                'name' => 'Apple iPad 10.2" Wi-Fi 32 GB',
                'code' => 'apple_ipad_10.2"',
                'description' => 'Екран 10.2" IPS (2160x1620) MultiTouch / Apple A12 Bionic (2.49 ГГц) / 32 ГБ вбудованої пам\'яті / Wi-Fi / Bluetooth',
                'price' => '11500',
                'category_id' => 2,
                'image' => 'products/apple_ipad_10_2.jpg',
            ],
            [
                'name' => 'Apple iPad Pro 12.9',
                'code' => 'apple_ipad_pro_12.9',
                'description' => 'Екран 12.9" IPS (2732x2048) ємнісний MultiTouch / Apple A12Z Bionic / 128 ГБ вбудованої пам\'яті / 3G / 4G / Wi-Fi ',
                'price' => '43000',
                'category_id' => 2,
                'image' => 'products/apple_ipad_pro_12_9.jpg',
            ],
            [
                'name' => 'Apple iPad Air 10.5',
                'code' => 'apple_ipad_air_10.5',
                'description' => 'Екран 10.5" IPS (2224x1668) ємнісний MultiTouch / Apple A12 Bionic / RAM 3 ГБ / 256 ГБ вбудованої пам\'яті!',
                'price' => '27900',
                'category_id' => 2,
                'image' => 'products/apple_ipad_air_10_5.jpg',
            ],
            [
                'name' => 'SAMSUNG RB38T676FSA/UA',
                'code' => 'SAMSUNG_RB38T676FSA/UA',
                'description' => 'Система розморожування No Frost (Frost Free)',
                'price' => '17000',
                'category_id' => 3,
                'image' => 'products/AMSUNG_RB38T676FSA_UA.jpg',
            ],
            [
                'name' => 'BOSCH KGN36XI35',
                'code' => 'BOSCH_KGN36XI35',
                'description' => 'Габарити (ВхШхГ) 186 x 60 x 66 см!',
                'price' => '13500',
                'category_id' => 3,
                'image' => 'products/BOSCH_KGN36XI35.jpg',
            ],
            [
                'name' => 'INDESIT XIT8 T2E X',
                'code' => 'INDESIT_XIT8_T2E_X',
                'description' => 'Система розморожування No Frost (Frost Free)',
                'price' => '4200',
                'category_id' => 3,
                'image' => 'products/INDESIT_XIT8_T2E_X.jpg',
            ],
        ]);
    }
}
