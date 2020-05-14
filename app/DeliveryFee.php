<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryFee extends Model
{
    protected $guarded = ['id'];

    public function merchant(){

        return $this->belongsTo(Merchant::class);
    }
}
