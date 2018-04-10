<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CityCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'itemsCount' => $this->when($this->collection->count() > 1, $this->collection->count()),
        ];
    }
}
