<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Splash extends Model
{
    protected $fillable = [
        "page",
        "title",
        "description",
        "slogan",
        "button_string",
        "button_link",
        "button_icon"
    ];

    protected $table = 'splash';

    public function splash(){
        return $this->belongsTo('Splash');
    }
}
