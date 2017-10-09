<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = "comentarios";

    protected $fillable = ['titulo','comentario','user_id'];


    public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
