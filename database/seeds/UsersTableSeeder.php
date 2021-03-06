<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Користувач',
                'email' => 'user@example.com',
                'password' => bcrypt('user'),
                'is_admin' => 0,
            ],
            [
            'name' => 'Адмінистратор',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'is_admin' => 1,
            ],
        ]);
    }
}
