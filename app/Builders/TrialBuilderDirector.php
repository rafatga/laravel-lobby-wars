<?php

namespace App\Builders;

use App\Models\Trial;
use Illuminate\Support\Facades\DB;

class TrialBuilderDirector
{
    public function build(TrialBuilderInterface $builder): Trial
    {
        DB::transaction(function () use ($builder) {
            $builder->createTrial();
            $builder->createTeams();
            $builder->setVerdict();
        });
        return $builder->getTrial();
    }
}
