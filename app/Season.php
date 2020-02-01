<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
           /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'season_year',
        'man_of_season'
    ];
}
