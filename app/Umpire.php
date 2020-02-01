<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umpire extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'country_id'
    ];
}
