<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = "obras";

    protected $fillable = ['nombre','url','comentario','museo_id'];


    public function museo(){
    	return $this->belongsTo('App\Museo');
    }
    
    public function users(){
        return $this->belongsToMany('App\User','obras_favoritas');
    }    

}
