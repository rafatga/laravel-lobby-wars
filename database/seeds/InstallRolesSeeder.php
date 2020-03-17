<?php

use Illuminate\Database\Seeder;
use \App\Models\Role;

class InstallRolesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'King',
            'key' => Role::KING_KEY,
            'points' => 5,
        ]);
    
        Role::create([
            'name' => 'Notary',
            'key' => Role::NOTARY_KEY,
            'points' => 2,
        ]);
    
        Role::create([
            'name' => 'Validator',
            'key' => Role::VALIDATOR_KEY,
            'points' => 1,
        ]);
    }
}
