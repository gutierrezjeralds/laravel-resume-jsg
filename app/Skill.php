<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        "title",
        "description",
        "percent",
        "start_in",
        "end_in"
    ];

    protected $table = 'skills';

    public function skill(){
        return $this->belongsTo('Skill');
    }
}
