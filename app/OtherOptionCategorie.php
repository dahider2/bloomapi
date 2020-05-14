<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherOptionCategorie extends Model
{
    protected $guarded = ['id'];

    public function article(){

        return $this->belongsTo(Article::class);
    }

    public function other_options(){

        return $this->hasMany(OtherOption::class);
    }

}
