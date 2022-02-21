<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'type' => 'femme',
                "url" => "1.png"
            ],
            [
                'type' => 'homme',
                "url" => "2.png"

            ],
            [
                'type' => 'non-genre',
                "url" => "3.png"

            ],
        ]);
    }
}
