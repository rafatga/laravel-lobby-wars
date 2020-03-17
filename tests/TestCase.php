<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->setUpDatabase();
    }
    
    /**
     * Set up the database.
     */
    protected function setUpDatabase()
    {
        $this->seed('DatabaseSeeder');
    }
    
}
