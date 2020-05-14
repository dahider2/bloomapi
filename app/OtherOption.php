<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherOption extends Model
{
    protected $guarded = ['id'];

    public function other_option_categorie(){

        return $this->belongsTo(OtherOptionCategorie::class);
    }
}
