<?php

namespace App\Builders;

use App\Models\Team;
use App\Models\Trial;
use App\Services\TrialVerdictService;

class TrialBuilder implements TrialBuilderInterface
{
    protected $data;
    protected $trial;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    public function createTrial()
    {
        $this->trial = Trial::create([
            'title' => collect($this->data['teams'])->pluck('name')->join(' VS ')
        ]);
    }
    
    public function createTeams()
    {
        $trial = $this->trial;
        collect($this->data['teams'])->each(function ($team) use ($trial) {
            $trial->teams()->create([
                'name' => $team['name'],
                'contracts' => $team['contracts'],
            ]);
        });
    }
    
    public function setVerdict()
    {
        $winnerTeam = TrialVerdictService::getTeamWinner($this->trial);
        
        if ( empty($winnerTeam) ) {
            abort(412);
        }
        
        $winnerTeam->is_winner = true;
        $winnerTeam->save();
    }
    
    public function getTrial()
    {
        return $this->trial;
    }
}
