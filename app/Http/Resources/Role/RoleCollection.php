<?php

namespace App\Http\Resources\Role;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RoleCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\Role\Role';
    
    /**
     * AttributeCollection constructor.
     * @param $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource);
        static::$wrap = 'roles';
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            static::$wrap => $this->collection
        ];
    }
}
