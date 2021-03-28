<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Смартфони',
                'code' => 'mobiles',
                'description' => 'У цьому розділі ви знайдете найбільш популярні смартфони',
                'image' => 'categories/mobiles.jpg',
            ],
            [
                'name' => 'Планшети',
                'code' => 'tablets',
                'description' => 'Розділ з планшетами',
                'image' => 'categories/tablets.jpg',
            ],
            [
                'name' => 'Холодильники',
                'code' => 'fridges',
                'description' => 'Разділ холодильників',
                'image' => 'categories/fridges.jpg',
            ],
        ]);
    }
}
