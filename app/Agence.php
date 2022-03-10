<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{

    protected $fillable = ['nom'];


    public function vhls(){
        return $this->hasMany('App\Vhl');
           }
}
