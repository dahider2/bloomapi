<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OtherOptionCategorieResource extends JsonResource
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
            "id" => $this->id,
            "ref" =>$this->reference,
            "lib" => $this->libele,
            "otherOptions" => OtherOptionResource::collection($this->whenloaded('other_options')),
        ];
    }
}
