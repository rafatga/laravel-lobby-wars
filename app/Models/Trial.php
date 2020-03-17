<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{
    protected $fillable = [
        'title',
    ];
    
    //Relations
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    
    //Methods
    public function getTitle()
    {
        $winnerTeam = $this->teams->where('is_winner', true)->first();
        $loserTeam = $this->teams->where('is_winner', false)->first();
        
        return $winnerTeam->name . " ({$winnerTeam->points} points) has won to " . $loserTeam->name . " ({$loserTeam->points} points)";
    }
}
