<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puntaje extends Model
{
    protected $table = "puntajes";

    protected $fillable = ['puntaje', 'user_id', 'juego_id'];


    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function juego(){
    	return $this->belongsTo('App\Juego');
    }
}
