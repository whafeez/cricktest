<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra_run extends Model
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
        'extra_type_id',
        'extra_runs',
        'team_bowling',
        'inning_no'
    ];
}
