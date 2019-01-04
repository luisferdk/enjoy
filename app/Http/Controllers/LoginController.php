<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request){
        $credencials = $request->only(['email','password']);

        if(Auth::attempt($credencials)){
            $user = User::whereEmail($request->input('email'))->first();

            if($user->type == 3)
                return response()->json(['status'=>true,'redirect'=>'/']);
            else
                return response()->json(['status'=>true,'redirect'=>'admin/reservas']);
        }
        return response()->json(['status'=>false,'msg'=>'error']);
    }

    public function logout(){
        Auth::logout();
        return response()->json('logout');
    }
}
