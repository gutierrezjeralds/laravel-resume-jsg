<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Splash extends Model
{
    protected $fillable = [
        "page",
        "category",
        "string",
        "fa_icon",
        "uri"
    ];

    public function splash(){
        return $this->belongsTo('Splash');
    }
}
