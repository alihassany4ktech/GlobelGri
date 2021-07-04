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
                'name' => 'Agent',
                'role_id' => '1',
                'email' => 'agent@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Property Manager',
                'role_id' => '2',
                'email' => 'peopertymanager@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Lender',
                'role_id' => '3',
                'email' => 'lender@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Builder',
                'role_id' => '4',
                'email' => 'builder@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Investor',
                'role_id' => '5',
                'email' => 'investor@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Renter',
                'role_id' => '6',
                'email' => 'renter@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Platform Administrator ',
                'role_id' => '7',
                'email' => 'platformadninitrator@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],

            [
                'name' => 'Buyer ',
                'role_id' => '8',
                'email' => 'buyer@gmail.com',
                'status' => '1',
                'image' => 'profile_images/1625303817profile.jpg',
                'phone' => '111-222-333',
                'address' => 'lahore,pakistan',
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
