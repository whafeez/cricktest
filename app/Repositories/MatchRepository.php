<?php

namespace App\Repositories;

use App\Match_final_result;

class MatchRepository extends BaseRepository {

    public static function getFinalResults() {
        return Match_final_result::with('parent')->get();
    }

}
