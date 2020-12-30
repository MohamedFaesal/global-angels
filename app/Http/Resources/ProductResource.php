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
            'category' => new CategoryResource($this->category),
            'description' => $this->description,
            'type' => $this->type,
            'affiliate_link' => $this->affiliate_link,
            'source' => $this->source,
            'price' => $this->price,
            'weight' => $this->weight,
            'weight_type' => $this->weight_type,
            'shipment_fits' => ShipmentFitResource::collection($this->shipmentFits),
            'images' => [
                $this->main_image,
                $this->main_image,
                $this->main_image
            ]
        ];
    }
}