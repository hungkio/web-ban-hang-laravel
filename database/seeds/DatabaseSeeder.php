<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *in
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GuestSeeder::class);
        $this->call(RankSeeder::class);
    }
}
