<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlayerRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$playersRoles = ['Captain','Keeper','Player','CaptainKeeper'];
        for ($i=0; $i <count($playersRoles); $i++) { 
			DB::table('player_roles')->insert([
	            'name' => $playersRoles[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);
		}
    }
}
