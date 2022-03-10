<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    public function vhl(){

        return $this->belongsToMany(Vhl::class,'statu_vhl')->withTimestamps();


    }
}
