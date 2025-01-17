<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['nuraiym', 'asem', 'yrys', 'gul'];
        $cities = ['atyrau', 'aktau', 'almaty', 'astana'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $names[rand(0, 3)], // random() орнына rand() және индекс диапазоны дұрыс
                'age' => rand(10, 30),
                'city' => $cities[rand(0, 3)], // Индекстерді диапазонға сәйкес түзету
            ]);
        }
    }
}

