<?php

namespace App\Http\Controllers\Api;

use App\User;
use Socialite;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function users(Request $request){
        
        $users = User::select('id','nombre','email')
                    ->where([
                        ['email','=',$request->email],
                        ['provider','=',$request->provider]
                        ])
                    ->first();
        if ( !empty ( $users ) ) {
            $rta = $users;
        }else{
            User::create($request->all());

            $rta = User::select('id','nombre','email')
                    ->where([
                        ['email','=',$request->email],
                        ['provider','=',$request->provider]
                        ])
                    ->first();
        }
        return $rta;
    }
}
