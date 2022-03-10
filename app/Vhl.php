<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vhl extends Model
{

   use SoftDeletes;

    public function agence(){

       return $this->belongsTo('App\Agence');


    }
    public function categorie(){

        return $this->belongsTo('App\Categorie');

    }

    public function intitule(){

        return $this ->belongsTo(Intitule::class);
    }


    public function status(){

        return $this->belongsToMany(Statu::class,'statu_vhl')->withTimestamps();


    }

    public function Commentaires(){

        return $this ->hasMany(Commentaire::class);
    }

}
