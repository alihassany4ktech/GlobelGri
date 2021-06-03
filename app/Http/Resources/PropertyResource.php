<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user->id,
            'user_name' => $this->user->name,
            'user_phone' => $this->user->phone,
            'user_image' => $this->user->image,
            'propert_title' => $this->propert_title,
            'featured_photo' => $this->featured_photo,
            'price' => $this->price,
            'property_type' => $this->property_type,
            'date' => $this->created_at,
        ];
    }
}
