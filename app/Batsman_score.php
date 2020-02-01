<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batsman_score extends Model
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
        'player_id',
        'runs_scored',
        'inning_no'
    ];
}
