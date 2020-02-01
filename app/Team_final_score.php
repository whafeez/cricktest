<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team_final_score extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team',
        'score',
        'wickets',
        'overs',
        'match_id',
        'season_id'
    ];
}
