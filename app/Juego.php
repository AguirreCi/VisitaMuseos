<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
	protected $table = "juegos";

    protected $fillable = ['nombre', 'museo_id'];

    public function museo(){
    	return $this->belongsTo('App\Museo');
    }

    public function puntajes(){
    	return $this->hasMany('App\Puntaje');
    }
}
