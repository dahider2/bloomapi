<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MerchantResource extends JsonResource
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
            "id"=>$this->id,
            "code_merchant" =>$this->code_m,
            "name" =>$this->name,
            "contact_m" =>$this->contact_m,
            "delivery_fees" => DeliveryFeeResource::collection($this->whenLoaded('delivery_fees'))
        ];
    }
}
