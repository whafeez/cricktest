<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team1',
        'team2',
        'match_date',
        'season_id',
        'venue_id',
        'toss_winner',
        'toss_decider',
        'match_winner',
        'man_of_match'
    ];
}
