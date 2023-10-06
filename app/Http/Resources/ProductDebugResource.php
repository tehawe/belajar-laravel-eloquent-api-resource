<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDebugResource extends JsonResource
{
    public static $wrap = 'data';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'author' => 'THW Project',
            'server_time' => now()->toDateTimeString(),
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'price' => $this->price
            ]
        ];
    }
}
