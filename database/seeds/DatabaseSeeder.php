<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed (populate) the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(AdminsTableSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
