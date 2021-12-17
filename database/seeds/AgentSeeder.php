<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AgentSeeder extends Seeder
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
                'role' => 'Agent',
                'name' => 'Agent',
                'email' => 'agent@gmail.com',
                'status' => '1',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],

            [
                'role' => 'Lender',
                'name' => 'Lender',
                'email' => 'lender@gmail.com',
                'status' => '1',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'role' => 'Builder',
                'name' => 'Builder',
                'email' => 'builder@gmail.com',
                'status' => '1',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            // [
            //     'name' => 'Investor',
            //
            //     'email' => 'investor@gmail.com',
            //     'status' => '1',
            //     'image' => 'profile_images/1625303817profile.jpg',
            //     'phone' => '111-222-333',
            //     'address' => 'lahore,pakistan',
            //     'password' => Hash::make('12345678'),
            //     'remember_token' => Str::random(10),
            // ],
            [
                'role' => 'Renter',
                'name' => 'Renter',
                'email' => 'renter@gmail.com',
                'status' => '1',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],


            [
                'role' => 'Buyer',
                'name' => 'Buyer ',
                'email' => 'buyer@gmail.com',
                'status' => '1',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
