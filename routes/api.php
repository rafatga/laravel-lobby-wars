<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('Api\V1')->prefix('v1')->group(function () {

    // ROLES
    Route::get('roles', 'Role\RoleListController');
    
    // TRIAL
    Route::get('trials', 'Trial\TrialListController');
    Route::post('trials', 'Trial\StoreTrialController');
    
});