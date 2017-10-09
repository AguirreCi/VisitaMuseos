<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = "archivos";

    protected $fillable = ['url','tipo','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
