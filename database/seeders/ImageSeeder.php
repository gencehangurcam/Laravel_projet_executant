<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'url' => '1.png',
                "categorie_id" => 1,
                'created_at' => now(),
            ],
            [
                'url' => '2.png',
                "categorie_id" => 2,
                'created_at' => now(),
            ],
            [
                'url' => '3.png',
                "categorie_id" => 3,
                'created_at' => now(),
            ],
        ]);
    }
}
