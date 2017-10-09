<?php

namespace App\Http\Controllers\Api;

use App\Puntaje;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PuntajeController extends Controller
{
    public function porJuego($id){
    	$puntajes = DB::table('puntajes')
                            ->join('users','users.id','=','puntajes.user_id')
                            ->select('users.nombre','puntajes.puntaje')
                            ->where('puntajes.juego_id','=',$id)
                            ->get();
    	return $puntajes;
    }

    public function nueva(Request $request){
    	Puntaje::create($request->all());
    	return 'Puntaje Creado';
    }
}
