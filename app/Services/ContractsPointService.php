<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Role;

class ContractsPointService {
    public static function calcul (Collection $roles, String $contracts) :? int
    {
        $kingRole = $roles->where('key', '=',Role::KING_KEY)->first();
        $notaryRole = $roles->where('key', '=',Role::NOTARY_KEY)->first();
        $validatorRole = $roles->where('key', '=',Role::VALIDATOR_KEY)->first();
        
        $signaturesKeys = collect(str_split($contracts));
        
        $numKingSignature = $signaturesKeys->filter(function ($value) {
            return $value === Role::KING_KEY;
        })->count();
        
        $numNotarySignature = $signaturesKeys->filter(function ($value) {
            return $value === Role::NOTARY_KEY;
        })->count();
        
        $numValidatorSignature = $signaturesKeys->filter(function ($value) {
            return $value === Role::VALIDATOR_KEY;
        })->count();
        
        $points = 0;
        
        if ( $numKingSignature > 0) {
            $points += ($kingRole->points * $numKingSignature);
        }
    
        if ( $numNotarySignature > 0) {
            $points += ($notaryRole->points * $numNotarySignature);
        }
    
        if ( $numValidatorSignature > 0 && $numKingSignature === 0) {
            $points += ($validatorRole->points * $numValidatorSignature);
        }
        
        return $points;
    }
}