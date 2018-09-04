<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservation;
use App\Transfer;
use App\Tour;
use App\Vip;
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

    public function tour($id){
        return view('sitio.tour',compact('id'));
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

    public function shopGet(){
        return view('sitio.shop');
    }
    public function shopPost(Request $request){
        $reservation = Reservation::create($request->all());
        foreach (session('carrito')['traslados'] as $traslado){
            $traslado["reservation_id"] = $reservation->id;
            Transfer::create($traslado);
        }
        foreach (session('carrito')['tours'] as $tour){
            $tour["reservation_id"] = $reservation->id;
            Tour::create($tour);
        }
        foreach (session('carrito')['vip'] as $vip){
            $vip["reservation_id"] = $reservation->id;
            Vip::create($vip);
        }

        return view('sitio.paypal',compact('reservation'));
    }

    public function sessionGet(){
        if(session('carrito')){
            return session('carrito');
        }
        else{
            session([
                "carrito"=> array
                (
                    "traslados"=>array(),
                    "tours"=>array(),
                    "vip"=>array(),
                )
            ]);
        }
    }

    public function sessionPost(){
        session([
            "carrito" => $request->all()
        ]);
    }

    public function borrar(){
        session([
            "carrito"=> array
            (
                "traslados"=>array(),
                "tours"=>array(),
                "vip"=>array(),
            )
        ]);
    }

    public function test(){
        return Reservation::with("transfers","tours","vips")->find(1);
    }
}
