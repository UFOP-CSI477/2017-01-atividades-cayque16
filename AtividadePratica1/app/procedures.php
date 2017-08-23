<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procedures extends Model
{
    //retorna o user que criou o procedimento
    public function userId(){
      return $this->belongsTo('App\Users');
    }
}
