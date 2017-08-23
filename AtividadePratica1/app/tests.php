<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tests extends Model
{
    //retorna a id do user que vai fazer o exame
    public function userID(){
      return $this->belongsTo('App\Users');
    }
    //retorna a id do procedimento que sera feito
    public function procedureID(){
      return $this->belongsTo('App\Procedures');
    }
}
