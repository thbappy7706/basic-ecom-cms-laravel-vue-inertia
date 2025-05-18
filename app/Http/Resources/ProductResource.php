<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'is_active' => $this->is_active,
            'variations' => ProductVariationResource::collection($this->whenLoaded('variations', collect())),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}