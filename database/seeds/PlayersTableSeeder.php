<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Generator as Faker;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$players = array(
        	"SC Ganguly", 
        	"BB McCullum", 
        	"RT Ponting", 
        	"DJ Hussey",
        	"Mohammad Hafeez",
        	"R Dravid",
        	"W Jaffer",
        	"V Kohli",
        	"JH Kallis",
        	"CL White",
        	"MV Boucher",
        	"B Akhil",
        	"AA Noffke",
        	"P Kumar",
        	"Z Khan",
        	"SB Joshi",
        	"PA Patel",
        	"ML Hayden",
        	"MEK Hussey",
        	"MS Dhoni",
        	"SK Raina",
        	"JDP Oram",
        	"S Badrinath",
        	"K Goel",
        	"JR Hopes",
        	"KC Sangakkara",
        	"Yuvraj Singh",
        	"SM Katich",
        	"IK Pathan",
        	"T Kohli",
        	"YK Pathan",
        	"SR Watson",
        	"M Kaif"
        );
		for ($i=0; $i <count($players); $i++) { 
			DB::table('players')->insert([
	            'name' => $players[$i],
	            'date_of_birth' => 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);
		}*/
		$users = factory(App\Player::class, 33)->create();
    }
}
