<?php

namespace App\Http\Controllers\Api\V1\Trial;

use App\Http\Resources\Trial\TrialCollection;
use App\Models\Trial;

class TrialListController
{
    public function __invoke()
    {
        return new TrialCollection( Trial::all() );
    }
}
