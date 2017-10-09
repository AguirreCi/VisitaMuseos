<?php

namespace App\Http\Controllers\Api;

use App\Museo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MuseoController extends Controller
{
    public function all(){
    	$museos = Museo::all();
    	return $museos;
    }
}
