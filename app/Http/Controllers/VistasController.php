<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\User;
use App\Archivo;
use App\Obra;
use App\Experiencia;

class VistasController extends Controller
{
    public function inicio(){
    	return view('index');
    }

    public function visita(){
    	return view('planifica_visita');
    }

    public function experiencia_cabildo(){
    	return view('experiencia_cabildo');
    }

    public function conversemos(){
    	return view('conversemos');
    }

    public function el_museo_segun(){
        $user = User::all();
    	return view('el_museo_segun')->with('users',$user);
    }

    public function entretenimiento(){
    	return view('entretenimiento');
    }

    public function la_coleccion(){
        $obras = Obra::all();
        return view('la_coleccion')->with('obras',$obras);
    }

    public function recorrido_virtual(){
        return view('recorrido_virtual');
    }

    public function su_historia(){
        return view('su_historia');
    }

    public function el_edificio(){
        return view('el_edificio');
    }

    public function publicaciones(){
        return view('publicaciones');
    }

    public function puzzle_guemes(){
        return view('plantilla.rompecabezas.guemes');
    }
    
    public function puzzle_belgrano(){
        return view('plantilla.rompecabezas.belgrano');
    }
    
    public function puzzle_cabildo(){
        return view('plantilla.rompecabezas.cabildo');
    }

    public function rompecabezas($id){
        return view('rompecabeza')->with('id',$id);
    }

    public function cruci($id){
        return view('cruci')->with('id',$id);
    }

    public function cruci1(){
        return view('plantilla.crucigramas.crucigrama1');
    }
    public function cruci2(){
        return view('plantilla.crucigramas.crucigrama2');
    }
    public function cruci3(){
        return view('plantilla.crucigramas.crucigrama3');
    }

    public function vision($id){
        $user = User::find($id);
        $info = new Collection();

        $obras = Obra::all();
        $f_obras = $user->obras;
        $resultado = new Collection();
        $rta = new Collection();

        foreach ($obras as $obra) {
            if (!empty($f_obras)) {
                $control = 0;
                foreach ($f_obras as $fav) {
                    if($obra->id == $fav->id){
                        $control = 1;
                    }
                }
                if ($control==1) {
                    $resultado = collect(['id'=>$obra->id,'url'=>$obra->url,'comentario'=>$obra->comentario,'fav'=>1]);
                }else{
                    $resultado = collect(['id'=>$obra->id,'url'=>$obra->url,'comentario'=>$obra->comentario,'fav'=>0]);
                }
            }else{
                $resultado = collect(['id'=>$obra->id,'url'=>$obra->url,'comentario'=>$obra->comentario,'fav'=>0]);
            }
            $rta->push($resultado);
        }

        $archivos = Archivo::where('user_id',$id)
                            ->get();

        $experiencias = Experiencia::where('user_id',$id)
                            ->get();

        $info->push(['usuario'=>$user,'obras'=>$rta, 'archivos'=>$archivos, 'experiencias'=>$experiencias]);

        return view('visionmuseo')->with('info',$info);
    }
}
