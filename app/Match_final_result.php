<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match_final_result extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'status',
        'team_won',
        'win_by',
        'margin'
    ];
}
