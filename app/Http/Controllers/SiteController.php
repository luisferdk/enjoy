<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\Notification;
use App\Mail\Package;

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
    
    public function packagesPOST(Request $request){
        Mail::to($request->correo,"$request->nombre")->send(new Package($request->all()));
        return redirect('/packages')->with('status', 'Reservation Completed');
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
        session(
            ["reservation"=>$request->all()]
        );
        return view('sitio.paypal',compact('reservation'));
    }

    public function ipn(Request $request){
        $datos = $request->all();
        if ($datos['credit_card_processed'] == "Y") {
            $reservation = Reservation::create(session("reservation"));
            foreach (session('carrito')['traslados'] as $traslado) {
                $traslado["reservation_id"] = $reservation->id;
                Transfer::create($traslado);
            }
            foreach (session('carrito')['tours'] as $tour) {
                $tour["reservation_id"] = $reservation->id;
                Tour::create($tour);
            }
            foreach (session('carrito')['vip'] as $vip) {
                $vip["reservation_id"] = $reservation->id;
                Vip::create($vip);
            }

            $reservation->id_pago = $datos["order_number"];
            $reservation->estado = 1;
            $reservation->save();
            $reservation = $reservation::with('transfers','tours','vips')->where("id",$reservation->id)->first();
            Mail::to($reservation->correo,"$reservation->nombre $reservation->apellido")->send(new Notification($reservation));
            session([
                "reservation" => array(),
                "carrito" => array(
                    "traslados" => array(),
                    "tours" => array(),
                    "vip" => array(),
                )
            ]);
            return redirect('/')->with('status', 'Reservation Completed');
        }
    }

    public function sessionGet(){
        if(session('carrito')){
            return session('carrito');
        }
        else{
            return session([
                "carrito"=> array
                (
                    "traslados"=>array(),
                    "tours"=>array(),
                    "vip"=>array(),
                )
            ]);
        }
    }

    public function sessionPost(Request $request){
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
