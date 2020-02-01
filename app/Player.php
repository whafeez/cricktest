<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
   	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date_of_birth',
        'player_type',
        'batting_style',
        'bowling_style_id',
        'team_id',
        'country_id'
    ];
}
