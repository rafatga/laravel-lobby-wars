<?php

namespace App\Services;

use App\Models\Role;
use App\Models\Team;
use App\Models\Trial;

class TrialVerdictService {
    public static function getTeamWinner (Trial $trial) :? Team
    {
        $roles = Role::all();
      
        $team1 = $trial->teams->first();
        $team1->points = ContractsPointService::calcul($roles, $team1->contracts);
        $team1->save();
    
        $team2 = $trial->teams->last();
        $team2->points = ContractsPointService::calcul($roles, $team2->contracts);
        $team2->save();
        
        if( $team1->points > $team2->points )
            return $team1;
        
        if( $team1->points < $team2->points )
            return $team2;
        
        return null;
    }
}