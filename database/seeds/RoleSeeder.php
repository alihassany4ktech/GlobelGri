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
                'agent_role' => ('Agent'),
            ],
            [
                'agent_role' => ('Property Manager'),
            ],
            [
                'agent_role' => ('Lender'),
            ],
            [
                'agent_role' => ('Builder'),
            ],
            [
                'agent_role' => ('Investor'),
            ],
            [
                'agent_role' => ('Renter'),
            ],
            [
                'agent_role' => ('Platform Administrator'),
            ]
        ]);
    }
}
