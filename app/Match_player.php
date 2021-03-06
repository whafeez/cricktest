<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match_player extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'player_id',
        'role_id',
        'team_id'
    ];
}
