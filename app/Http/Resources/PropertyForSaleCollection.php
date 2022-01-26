<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyForSaleCollection extends JsonResource
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
            'agent_id' => $this->user_id,
            'threesixty_link' => $this->threesixty_link,
            'propert_title' => $this->propert_title,
            'price' => $this->price,
            'featured_photo' => $this->featured_photo,
            'gallery_photos' => $this->gallery_photos,
            'zipcode' => $this->zipcode,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'bedroom' => $this->bedroom,
            'bathroom' => $this->bathroom,
            'garages' => $this->garages,
            'area' => $this->area,
            'address' => $this->address,
            'description' => $this->description,
            'private_note' => $this->private_note,
        ];
    }
}
