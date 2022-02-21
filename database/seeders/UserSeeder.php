<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => "genc",
                'surename' => "gurcam",
                'year' => 29,
                'email' => "gencehangurcam@gmail.com",
                'password' => Hash::make("allo"),
                'avatar_id' => 1,
                'role_id' => 1
            ],
            [
                'name' => "Simple",
                'surename' => "utilisateur",
                'year' => 20,
                'email' => "alberteinstein@gmail.com",
                'password' => Hash::make("allo1"),
                'avatar_id' => 3,
                'role_id' => 3
            ],
        ]);
    }
}
