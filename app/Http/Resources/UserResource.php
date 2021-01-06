<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'phone' => $this->phone,
          'country' => $this->country ? new CountryResource($this->country) : null,
          'state' => $this->state ? new StateResource($this->state) : null,
          'gender' => $this->gender,
          'photo' => $this->photo
        ];
    }
}