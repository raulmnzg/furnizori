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
        // User Seeder
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);

        // Page Seeder
        $this->call(PageSeeder::class);

        // Locations
        $this->call(DistrictSeeder::class);

    }
}
