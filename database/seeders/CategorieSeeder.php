<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
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
                'name' => 'food',
                'created_at' => now(),
            ],
            [
                'name' => 'sport',
                'created_at' => now(),
            ],
            [
                'name' => 'technology',
                'created_at' => now(),
            ],
        ]);
    }
}
