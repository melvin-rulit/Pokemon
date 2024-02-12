<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('appearances')->insertOrIgnore([
            [
                'name_ru' => "Голова",
                'name_en' => "Head",

            ],
            [
                'name_ru' => "Голова и ноги",
                'name_en' => "Heads_legs",

            ],
            [
                'name_ru' => "Плавники",
                'name_en' => "Fins",

            ],
            [
                'name_ru' => "Крылья",
                'name_en' => "Wings",

            ],
        ]);

        DB::table('abilities')->insertOrIgnore([
            [
                'name_ru' => "Выжигать",
                'name_en' => "Burn out",
                'image' => "https://via.placeholder.com/640x480.png/00aa44?text=cupiditate,",

            ],
            [
                'name_ru' => "Замораживать",
                'name_en' => "Freeze",
                'image' => "https://via.placeholder.com/640x480.png/00aa44?text=cupiditate,",

            ],
            [
                'name_ru' => "Летать",
                'name_en' => "Fly",
                'image' => "https://via.placeholder.com/640x480.png/00aa44?text=cupiditate,",

            ],
            [
                'name_ru' => "Невидимый",
                'name_en' => "Invisible",
                'image' => "https://via.placeholder.com/640x480.png/00aa44?text=cupiditate,",

            ],
        ]);

        Pokemon::factory(10)->create();
    }
}
