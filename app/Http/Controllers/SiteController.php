<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
    	return view('sitio.index');
    }

    public function partyBoats(){
    	return view('sitio.partyBoats');
    }

    public function tours(){
    	return view('sitio.tours');
    }

    public function tour($tour){
        return view('sitio.tour');
    }

    public function packages(){
    	return view('sitio.packages');
    }

    public function wifiServices(){
    	return view('sitio.wifiServices');
    }

    public function puntacana(){
    	return view('sitio.puntacana');
    }
}
