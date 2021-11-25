<?php

use App\Subscription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            RoleSeeder::class,
            AgentSeeder::class,
            PropertySeeder::class,
            UnitSeeder::class,
            SubscriptionSeeder::class
        ]);

        // factory(Subscription::class)->times(10)->create();
    }
}
