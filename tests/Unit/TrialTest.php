<?php

namespace Tests\Unit;

use App\Models\Role;
use App\Services\ContractsPointService;
use App\Services\CreateTrialService;
use Tests\TestCase;

class TrialTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function testNewTrial()
    {
        $team1 = [ 'name' => 'Team A', 'contracts' => 'NV' ];
        $team2 = [ 'name' => 'Team B', 'contracts' => 'VK' ];
        
        $trial = [
           'teams' => [
               $team1,
               $team2
           ]
        ];
    
        $trial = CreateTrialService::create( $trial );
        $this->assertTrue( !empty($trial) );
    }
    
    
    /** @test */
    public function testContractsPointCalculator()
    {
        $roles = Role::all();
      
        $contractsTest1 = "NV";
        $this->assertEquals(3, ContractsPointService::calcul($roles, $contractsTest1));
        
        $contractsTest2 = "KVVVVV";
        $this->assertEquals(5, ContractsPointService::calcul($roles, $contractsTest2));
        
        $contractsTest3 = "VVVNNNN";
        $this->assertEquals(11, ContractsPointService::calcul($roles, $contractsTest3));
    }
    
    
    /** @test */
    public function testTrialVerdict()
    {
        $team1 = [ 'name' => 'Team A', 'contracts' => 'NV' ];
        $team2 = [ 'name' => 'Team B', 'contracts' => 'VK' ];
    
        $trial = [
            'teams' => [
                $team1,
                $team2
            ]
        ];
        
        $trial = CreateTrialService::create( $trial );
        $winnerTeam = $trial->teams->where('is_winner', true)->first();
        $this->assertEquals($team2['name'], $winnerTeam->name);
    }

}
