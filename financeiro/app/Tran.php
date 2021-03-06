<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tran extends Model
{
    protected $fillable = ['user_id','tipo_id','data','valor','credito'];

    public function Tipo(){
      return $this->belongsTo('App\Tipo');
    }

    public function User(){
      return $this->belongsTo('App\User');
    }
}
