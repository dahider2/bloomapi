<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{


    private $status;
    private $error;
    private $data;
    public function __construct($status, $error,$data)
    {
        $this->status = $status;
        $this->error = $error;
        $this->data = $data;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        $donnees =  [

                "id"   => $this->data->id,
                "code" => $this->data->code,
                "name" => $this->data->name,
                "qte" => $this->data->qantite,
                "price" => $this->data->price,
                "otherOptionsCategorie" => OtherOptionCategorieResource::collection($this->data->other_option_categories),
                "merchant" => new MerchantResource($this->data->merchant)

        ];

        return [
            "code" => $this->status,
            "error" => $this->error,
            "content" => $donnees
        ];
    }


}
