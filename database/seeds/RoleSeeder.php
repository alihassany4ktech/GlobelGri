<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => ('Agent'),
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => ('Lender'),
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => ('Builder'),
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            // [
            //     'name' => ('Investor'),
            // ],
            [
                'name' => ('Renter'),
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => ('Platform Administrator'),
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => ('Buyer'),
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],

            [
                'name' => ('Property Manager'),
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => ('Admin'),
                'type' => 0,
                'guard_name' => 'admin',
            ]
        ]);
    }
}
