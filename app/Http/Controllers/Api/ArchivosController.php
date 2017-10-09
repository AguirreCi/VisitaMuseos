<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArchivosController extends Controller
{
    public function guardar(Request $request){
    	if($request->hasFile('archivo')){
    		
    		$fileHash = time();
			$fileName = $fileHash . $request->file('archivo')->getClientOriginalName();

            $store = Storage::putFileAs('public/android', $request->file('archivo'), $fileName);
            
    		$url = Storage::url($store);
            $dato = ['archivo'=>$url];
    		return $dato;
    	}
    }
}
