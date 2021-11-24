<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscriptions')->insert([
            [
                'status' => 1,
                'title' => 'Demo Title 1',
                'price' => '1000',
                'valid_property' => 5,
                'agent_role' => 'Lender',
                'description' => 'The Zillow Premier Agent app makes it easier to be a mind-reading agent. 
                Your clients can opt in to share the homes they are viewing, saving and searching for on our 
                network of site'
            ],
            [
                'status' => 1,
                'title' => 'Demo Title 2',
                'price' => '2000',
                'valid_property' => 10,
                'agent_role' => 'Lender',
                'description' => 'The Zillow Premier Agent app makes it easier to be a mind-reading agent. 
                Your clients can opt in to share the homes they are viewing, saving and searching for on our 
                network of site'
            ],
            [
                'status' => 1,
                'title' => 'Demo Title 3',
                'price' => '3000',
                'valid_property' => 15,
                'agent_role' => 'Lender',
                'description' => 'The Zillow Premier Agent app makes it easier to be a mind-reading agent. 
                Your clients can opt in to share the homes they are viewing, saving and searching for on our 
                network of site'
            ],
            [
                'status' => 1,
                'title' => 'Demo Title 4',
                'price' => '4000',
                'valid_property' => 20,
                'agent_role' => 'Lender',
                'description' => 'The Zillow Premier Agent app makes it easier to be a mind-reading agent. 
                Your clients can opt in to share the homes they are viewing, saving and searching for on our 
                network of site'
            ],
            [
                'status' => 1,
                'title' => 'Demo Title 5',
                'price' => '5000',
                'valid_property' => 25,
                'agent_role' => 'Lender',
                'description' => 'The Zillow Premier Agent app makes it easier to be a mind-reading agent. 
                Your clients can opt in to share the homes they are viewing, saving and searching for on our 
                network of site'
            ],
            [
                'status' => 1,
                'title' => 'Demo Title 6',
                'price' => '6000',
                'valid_property' => 30,
                'agent_role' => 'Lender',
                'description' => 'The Zillow Premier Agent app makes it easier to be a mind-reading agent. 
                Your clients can opt in to share the homes they are viewing, saving and searching for on our 
                network of site'
            ],
        ]);
    }
}
