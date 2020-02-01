<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	$dt = Carbon::now();
			DB::table('seasons')->insert([
	            'season_year' => $dt->year,
	            'man_of_season' => 'n/a',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);
    }
}
