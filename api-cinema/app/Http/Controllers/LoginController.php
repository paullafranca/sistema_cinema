<?php

namespace App\Http\Controllers;

use App\User;
use JWTAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request){
    	$usuario = User::where('email', $request->get('email'))->first();

    	if(!$usuario) {
    		return response()->json(['Error' => 'Usuario nao encontrao'], 401);
    	}

    	$token = JWTAuth::fromUser($usuario);

    	return response()->json(['token' => $token], 200);
    }
}
