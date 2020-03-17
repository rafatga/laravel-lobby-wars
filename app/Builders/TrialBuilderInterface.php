<?php

namespace App\Builders;

interface TrialBuilderInterface
{
    public function createTrial();
    public function createTeams();
    public function setVerdict();
    public function getTrial();
}
