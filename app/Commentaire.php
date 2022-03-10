<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
   public function vhl(){

       return $this->belongsTo(Vhl::class);
   }
}
