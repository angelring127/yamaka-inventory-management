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
        $this->call(BigCategoriesTableSeeder::class);
        $this->call(MiddleCategoriesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);

    }
}
