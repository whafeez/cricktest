<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bowling_insight extends Model
{
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'over_id',
        'ball_id',
        'inning_no',
        'team_batting',
        'team_bowling',
        'striker',
        'non_striker',
        'bowler_id'
    ];
}
