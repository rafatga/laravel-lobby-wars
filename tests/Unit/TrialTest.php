<?php

namespace Tests\Unit;

use App\Services\CreateTrialService;
use Tests\TestCase;

class TrialTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function testNewTrial()
    {
        $rafa = "dd";
        $this->assertTrue(!is_null($rafa));
        
        $team1 = [ 'name' => 'Team A', 'contracts' => 'NV' ];
        $team2 = [ 'name' => 'Team B', 'contracts' => 'VK' ];
        
        $trial = [
           'teams' => [
               $team1,
               $team2
           ]
        ];
    
        $trial = CreateTrialService::create( $trial );
        
        $this->assertTrue(!is_null($trial));

    }

}
