<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BowlingStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$bowlingstyles = [
    			"Right-arm medium",
				"Right-arm offbreak",
				"Right-arm fast-medium",
				"Legbreak googly",
				"Right-arm medium-fast",
				"Left-arm fast-medium",
				"Slow left-arm orthodox",
				"Slow left-arm chinaman",
				"Left-arm medium-fast",
				"Legbreak",
				"Right-arm fast",
				"Right-arm bowler",
				"Left-arm medium",
				"Left-arm fast"
			];
        for ($i=0; $i <count($bowlingstyles); $i++) { 
			DB::table('bowling_styles')->insert([
	            'style_name' => $bowlingstyles[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);
		}
    }
}
