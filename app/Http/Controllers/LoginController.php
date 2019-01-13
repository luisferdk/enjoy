<?php

namespace App\Http\Controllers;

use App\Agency;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $credencials = $request->only(['email','password']);

        if(Auth::attempt($credencials)){
            $user = User::whereEmail($request->input('email'))->first();

            if($user->type == 3){
                $agency = Agency::with(['discounts'=>function($query){
                    $query->where('status',1)->first();
                }])->whereEmail($request->input('email'))
                          ->where('status',1)
                          ->first();

                Session::put(['discount' => $agency->discounts[0]->percentage]);
                return response()->json(['status'=>true,'redirect'=>'/','agencyUser'=>$agency]);
            }

            else
                return response()->json(['status'=>true,'redirect'=>'admin/reservas']);
        }
        return response()->json(['status'=>false,'msg'=>'error']);
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return response()->redirectTo('/');
    }
}
