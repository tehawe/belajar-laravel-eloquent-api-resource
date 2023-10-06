<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\CategorySimpleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public static $wrap = 'data';

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => new CategorySimpleResource($this->category),
            'price' => $this->price,
            'is_expensive' => $this->when($this->price > 800, true, false),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
