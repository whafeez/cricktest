<?php

namespace App;

use App\Repositories\MatchRepository;
use Carbon\Carbon;
use App\Model;
use App\Match;

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

    public function parent()
    {
        return $this->belongsTo(Match::class, 'match_id');
    }

    public function hasParent()
    {
        return $this->has('parent');
    }

}
