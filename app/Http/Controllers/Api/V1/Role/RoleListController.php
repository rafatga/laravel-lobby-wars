<?php

namespace App\Http\Controllers\Api\V1\Role;

use App\Http\Resources\Role\RoleCollection;
use App\Models\Role;

class RoleListController
{
    public function __invoke()
    {
        return new RoleCollection( Role::all() );
    }
}
