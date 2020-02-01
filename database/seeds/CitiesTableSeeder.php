<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $cities = array("Lahore", "Peshawar", "Karachi", "Faisalabad", "Rawalpindi");
		for ($i=0; $i <count($cities); $i++) { 
			DB::table('cities')->insert([
	            'name' => $cities[$i],
	            'country_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);
		}
    }
}
