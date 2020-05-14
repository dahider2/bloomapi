<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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

                "id"   => $this->id,
                "code" => $this->code,
                "name" => $this->name,
                "qte" => $this->qantite,
                "price" => $this->price,
                "otherOptionsCategorie" => OtherOptionCategorieResource::collection($this->whenLoaded('other_option_categories')),
                "merchant" => new MerchantResource($this->whenLoaded('merchant'))

        ];
    }


}
