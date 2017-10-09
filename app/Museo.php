<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Museo extends Model
{
    protected $table = "museos";

    protected $fillable = ['nombre'];

    public function calificaciones(){
    	return $this->hasMany('App\Calificacion');
    }

    public function experiencias(){
    	return $this->hasMany('App\Experiencia');
    }

    public function juegos(){
    	return $this->hasMany('App\Juego');
    }

    public function obras(){
        return $this->hasMany('App\Obra');
    }
}
