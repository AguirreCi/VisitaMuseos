<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Obra;
use App\Archivo;
use App\User;

class MuseoSegunController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

    public function guardar(Request $request){
        $user = User::find(Auth::user()->id);

        $file = $request->file('file');

        if (!empty($file)) {

            if ($request->tipo == 1) {
                $control = 'jpg gif png bmp wbmp webm';
                if (str_contains($control,$file->getClientOriginalExtension())) {
                $filename = uniqid() .'.'. $file->getClientOriginalExtension();

                $store = Storage::putFileAs('public/archivos', $file, $filename);

                $url = Storage::url($store);
                
                Archivo::create(['url'=>$url,'tipo'=>$request->tipo,'user_id'=>$user->id]);

                return 'Imagen subida';

                }
            }elseif ($request->tipo == 2) {
                $control = 'mp3 acc m4a mp4 wav ogg 3gpp 3gp wma flac mid';
                if (str_contains($control,$file->getClientOriginalExtension())) {
                $filename = uniqid() .'.'. $file->getClientOriginalExtension();

                $store = Storage::putFileAs('public/archivos', $file, $filename);

                $url = Storage::url($store);
                
                Archivo::create(['url'=>$url,'tipo'=>$request->tipo,'user_id'=>$user->id]);

                return 'Audio subido';
                }
            }

        }

    }

    public function guardar_obra(Request $request){
        $user = User::find(Auth::user()->id);

        $obras = $request->input('obra');

        $user->obras()->detach();

        foreach ($obras as $obra) {
            $user->obras()->attach($obra);
        }


        return redirect('/crear_obra');
    }


    public function crear(){
        return view('crearvision');
    }

    public function crear_obra(){
        $user = User::find(Auth::user()->id);
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

        return view('crearvision_obras')->with('rta',$rta);
    }



    public function crear_foto(){
        $archivos = Archivo::all();
        $fotos = $archivos->where('tipo',1);

        return view('crearvision_fotos')->with('fotos',$fotos);
    }


    public function crear_audio(){
        $archivos = Archivo::all();
        $audios = $archivos->where('tipo',2);
        return view('crearvision_audio')->with('audios',$audios);;
    }

    public function cambiar_fondo(Request $request){

       DB::table('users')
            ->where('id', $request->user)
            ->update(['fondo' => $request->fondo]);

        return redirect('/crear');
    }

}
