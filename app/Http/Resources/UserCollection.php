<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[

            // 'id' => $this->id,
            // 'name' => $this->name,
            // 'email' => $this->email,
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
            ];

    }
    
}

