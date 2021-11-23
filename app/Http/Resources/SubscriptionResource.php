<?php

namespace App\Http\Resources;

use App\PurchasedSubscription;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $active = PurchasedSubscription::where('subscription_id', '=', $this->id)->where('agent_id', '=', auth('api')->user()->id)->exists();
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'valid_property' => $this->valid_property,
            'description' => strip_tags($this->description),
            'active' => empty($active) ? false : true,
        ];
    }
}
