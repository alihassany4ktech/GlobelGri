<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                [
                    'type' => null,
                    'name' => 'Admin',
                    'email' => ('admin@gmail.com'),
                    'password' => Hash::make('12345678'),
                    'remember_token' => Str::random(10),
                ],
                [
                    'type' => 'BackEnd',
                    'name' => 'Backen User',
                    'email' => 'backenduser@gmail.com',
                    'password' => Hash::make('12345678'),
                    'remember_token' => Str::random(10),
                ],
                [
                    'type' => 'BackEnd',
                    'name' => 'Platform Administrator ',
                    'email' => 'platformadninitrator@gmail.com',
                    'password' => Hash::make('12345678'),
                    'remember_token' => Str::random(10),
                ],

            ]
        );
    }
}
