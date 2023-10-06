<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            // 'data' => $this->collection, // All data category
            'data' => CategorySimpleResource::collection($this->collection), // Selected data category
            'total' => count($this->collection)
        ];
    }
}
