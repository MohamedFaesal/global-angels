<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category->name,
            'description' => $this->description,
            'type' => $this->type,
            'affiliate_link' => $this->affiliate_link,
            'source' => $this->source,
            'price' => $this->price,
            'weight' => $this->weight,
            'weight_type' => $this->weight_type,
            'image' => $this->main_image
        ];
    }
}