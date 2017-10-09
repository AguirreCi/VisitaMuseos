<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table = "experiencias";

    protected $fillable = ['tipo', 'contenido', 'museo_id', 'user_id'];

    public function museo(){
    	return $this->belongsTo('App\Museo');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
