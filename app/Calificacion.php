<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = "calificaciones";

    protected $fillable = ['calif_atencion', 'calif_contenido', 'opinion', 'museo_id', 'user_id'];


    public function museo(){
    	return $this->belongsTo('App\Museo');
    }


    public function user(){
    	return $this->belongsTo('App\User');
    }
}
