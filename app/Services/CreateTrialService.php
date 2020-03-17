<?php

namespace App\Services;

use App\Builders\TrialBuilder;
use App\Builders\TrialBuilderDirector;
use App\Models\Trial;

class CreateTrialService {
    public static function create (array $data = []) : Trial
    {
        $trialBuilder = (new TrialBuilder($data));
        $trial = (new TrialBuilderDirector())->build($trialBuilder);
        return $trial;
    }
}