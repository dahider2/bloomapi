<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OtherOptionResource extends JsonResource
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
            "id" =>$this->id,
            "ref" => $this->reference,
            "lib" => $this->libele,
            "price" => $this->price,
            "qte" => $this->qantite,
            "choosed" => $this->choose ? "true": "false",
        ];
    }
}
