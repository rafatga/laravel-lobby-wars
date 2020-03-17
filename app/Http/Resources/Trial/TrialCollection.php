<?php

namespace App\Http\Resources\Trial;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TrialCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = 'App\Http\Resources\Trial\Trial';
    
    /**
     * AttributeCollection constructor.
     * @param $resource
     */
    public function __construct($resource)
    {
        parent::__construct($resource);
        static::$wrap = 'trials';
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
