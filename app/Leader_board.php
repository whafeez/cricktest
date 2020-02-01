<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader_board extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id',
        'season_id',
        'match_played',
        'match_win',
        'match_loss',
        'runs_scored',
        'net_run_rate',
        'points'
    ];
}
