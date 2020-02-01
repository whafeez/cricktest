<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $teams = array("Kolkata Knight Riders", "Royal Challengers Bangalore", "Chennai Super Kings", "Delhi Daredevils");
		for ($i=0; $i <count($teams); $i++) { 
			DB::table('teams')->insert([
	            'name' => $teams[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);
		}
    }
}