<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $casts = [
        'is_winner' => 'boolean'
    ];
    
    protected $fillable = [
        'name',
        'contracts',
        'points',
        'is_winner',
    ];
    
    //Relations
    public function trial()
    {
        return $this->belongsTo(Trial::class);
    }
    
}
