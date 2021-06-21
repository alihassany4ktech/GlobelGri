<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'propert_title' => $this->propert_title,
            'featured_photo' => $this->featured_photo,
            'price' => $this->price,
            'address' => $this->address,
            'zipcode' => $this->zipcode,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'property_type' => $this->property_type,
            'date' => $this->created_at,
        ];
    }
}
