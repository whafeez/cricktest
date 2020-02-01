<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
	$a=array("1"=>"batsman","2"=>"bowler");
	$b=array("1"=>"RH","2"=>"LH");
    return [
        'name' => $faker->name,
        'date_of_birth' => $faker->dateTimeBetween('1985-01-01', '2000-12-31'),
    	'player_type' => array_rand($a,1),
        'batting_style' => array_rand($b,1),
        'bowling_style_id' => mt_rand(1,14),
        'team_id' => mt_rand(1,4),
        'country_id' => mt_rand(13,17),
    ];
});
