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
//        $this->call(RolesAndPermissionSeeder::class);
        $this->call(UserTableSeeder::class);
//        $this->call(CraftingSeeder::class);
//        $this->call(GearSeeder::class);
//        $this->call(MaterialSeeder::class);
    }
}
