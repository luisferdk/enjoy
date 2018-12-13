<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\UserRegister;
use App\Mail\ConfirmRegis;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function createUser(Request $request){
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['token'] = bcrypt($data['password']);
        $user = User::create($data);
        $token = Crypt::encrypt($user->id.'@#$%$'.$user->email);
        $user->token = $token;

        if($user){
            Mail::to("info@rennytours.com","Renny Travel")->send(new UserRegister($user));
            Mail::to($user->email,$user->name)->send(new ConfirmRegis($user,$token));
        }

        return response()->redirectTo('/');
    }

    public function confirm($token){
        $data = Crypt::decrypt($token);
        $dataToken = explode('@#$%$',$data);
        $user = User::whereId($dataToken[0])->first();

        if($user->token == ''){
            return response()->redirectTo('result-confirm/Token Expiro');
        }else{
            $user->token = '';
            $user->save();
            return response()->redirectTo('result-confirm/Usuario Confirmado');
        }
    }

    public function resultConfirm($mensaje){
        return view('users.confirm')->with(['message'=>$mensaje]);
    }
}
