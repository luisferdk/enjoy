<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GetDataSession extends Controller
{
    public function getdataSession(){

        if( Session::has('discount') )
            return response()->json( Session::get('discount') );
        else
            return response()->json(0);
    }
}
