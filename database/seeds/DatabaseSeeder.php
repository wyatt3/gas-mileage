<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(GasEventTableSeeder::class);
        $this->call(MaintenanceEventTableSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);

    }
}
