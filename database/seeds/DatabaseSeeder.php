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
        $this->call(CountriesTableSeeder::class);
        $this->call(citiesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(PlayerRoleTableSeeder::class);
        $this->call(BowlingStylesTableSeeder::class);
    }
}
