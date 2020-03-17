<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public const KING_KEY = "K";
    public const NOTARY_KEY = "N";
    public const VALIDATOR_KEY = "V";
    
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'key',
        'points',
    ];
}
