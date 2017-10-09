<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'provider_id', 'provider', 'email', 'password', 'imagen', 'fondo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function calificaciones(){
        return $this->hasMany('App/Calificacion');
    }

    public function experiencias(){
        return $this->hasMany('App/Experiencia');
    }

    public function puntajes(){
        return $this->hasMany('App\Puntaje');
    }    

    public function archivos(){
        return $this->hasMany('App\Archivo');
    }

    public function comentarios(){
        return $this->hasMany('App\Comentario');
    }

    public function obras(){
        return $this->belongsToMany('App\Obra','obras_favoritas');
    }    

}
