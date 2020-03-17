<?php

namespace App\Http\Resources\Trial;

use Illuminate\Http\Resources\Json\JsonResource;

class Trial extends JsonResource
{
    public static $wrap = 'trial';

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'teams' => $this->teams,
            'title' => $this->getTitle()
        ];
    }
}
