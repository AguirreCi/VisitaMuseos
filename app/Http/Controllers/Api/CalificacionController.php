<?php

namespace App\Http\Controllers\Api;

use App\Calificacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalificacionController extends Controller
{
    public function all(){
    	$calificaciones = Calificacion::all();
    	return $calificaciones;
    }

    public function porMuseo($id){
    	$calificaciones = DB::table('calificaciones')
                            ->join('users','users.id','=','calificaciones.user_id')
                            ->select('users.nombre','calificaciones.id','calificaciones.calif_atencion','calificaciones.calif_contenido','calificaciones.opinion','calificaciones.museo_id','calificaciones.user_id')
                            ->where('calificaciones.museo_id','=',$id)
                            ->get();


    	return $calificaciones;
    }

    public function ranking(){

    	$ranking = DB::table('calificaciones')
    				->join('museos','museos.id','=','calificaciones.museo_id')
    				->select('calificaciones.museo_id','museos.nombre', DB::raw('(SUM(calif_atencion)/count(*)) as atencion'),DB::raw('(SUM(calif_contenido)/count(*)) as contenido'), DB::raw('(SUM(calif_atencion + calif_contenido)/(count(*)*2)) as promedio'))
    				->groupBy('calificaciones.museo_id','museos.nombre')
                    ->orderBy('promedio')
    				->get();
    				
    	return $ranking;
    }

    public function nueva(Request $request){
        Calificacion::create($request->all());
        return 'Calificacion Registrada';
    }

}
