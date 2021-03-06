<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$countries = array("India", "Pakistan", "Australia", "England", "South Africa");
		for ($i=0; $i <count($countries); $i++) { 
			DB::table('countries')->insert([
	            'name' => $countries[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);
		}
    }
}
