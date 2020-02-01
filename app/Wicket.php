<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wicket extends Model
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
        'player_out',
        'out_type',
        'bowled_by'
    ];
}
