<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];


    public function merchant(){

        return $this->belongsTo(Merchant::class);
    }

    public function other_option_categories(){

        return $this->hasMany(OtherOptionCategorie::class);
    }
}
