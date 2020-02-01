<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bowling_style extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'style_name'
    ];
}
