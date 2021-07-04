<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            [
                'unit_name' => 'Name 1',
                'unit_price' => '1000',
                'property_id' => '6',
                'ownership_id' => '3',
                'property_title' => 'Demo Title 1',
                'status' => '0',
                'current' => '1',
                'created_at' => '2021-07-03 04:07:31'
            ],

            [
                'unit_name' => 'Name 2',
                'unit_price' => '6000',
                'property_id' => '6',
                'ownership_id' => '3',
                'property_title' => 'Demo Title 2',
                'status' => '0',
                'current' => '1',
                'created_at' => '2021-07-03 04:07:31'
            ],


            [
                'unit_name' => 'Name 3',
                'unit_price' => '3000',
                'property_id' => '6',
                'ownership_id' => '3',
                'property_title' => 'Demo Title 2',
                'status' => '0',
                'current' => '1',
                'created_at' => '2021-07-03 04:07:31'
            ],

            [
                'unit_name' => 'Name 1',
                'unit_price' => '1000',
                'property_id' => '5',
                'ownership_id' => '3',
                'property_title' => 'Demo Title 1',
                'status' => '0',
                'current' => '1',
                'created_at' => '2021-07-03 04:07:31'
            ],

            [
                'unit_name' => 'Name 2',
                'unit_price' => '3000',
                'property_id' => '5',
                'ownership_id' => '3',
                'property_title' => 'Demo Title 2',
                'status' => '0',
                'current' => '1',
                'created_at' => '2021-07-03 04:07:31'
            ],

        ]);
    }
}
