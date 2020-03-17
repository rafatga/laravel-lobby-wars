<?php

namespace App\Http\Controllers\Api\V1\Trial;

use App\Http\Resources\Trial\Trial as TrialResource;
use App\Services\CreateTrialService;
use Illuminate\Http\Request;

class StoreTrialController
{
    public function __invoke(Request $request)
    {
        $trial = CreateTrialService::create( $request->all() );
        return new TrialResource($trial);
    }
}
