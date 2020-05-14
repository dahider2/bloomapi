<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $guarded = ['id'];


    public function articles(){

        return $this->hasMany(Article::class);
    }


    public function delivery_fees(){

        return $this->hasMany(DeliveryFee::class);
    }
}
