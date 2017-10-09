<?php

namespace App\Http\Controllers\Api;

use App\Experiencia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienciaController extends Controller
{
    public function porMuseo($id){
    	$experiencia = DB::table('experiencias')
                            ->join('users','users.id','=','experiencias.user_id')
                            ->select('users.nombre','experiencias.tipo','experiencias.contenido','experiencias.museo_id','experiencias.user_id')
                            ->where('experiencias.museo_id','=',$id)
                            ->get();
    	return $experiencia;
    }

    public function porId($id){
    	$experiencia = Experiencia::where('id',$id)->get();
    	return $experiencia;
    }

    public function nueva(Request $request){
        Experiencia::create($request->all());
        $resultado = Experiencia::first();
        return $resultado;
    }
}
