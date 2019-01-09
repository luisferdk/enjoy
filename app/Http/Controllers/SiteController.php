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
use App\Wifi;

use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;

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
        //Mail::to($request->correo,"$request->nombre")->send(new Package($request->all()));
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
        $data = $request->all();
        if(!isset($data['precio']))
            $data['precio'] = $request->input('finalPrice');

        session(
            ["reservation"=>$data]
        );

        $validator = Validator::make($request->all(), [
            "card_no" => "required",
            "ccExpiryMonth" => "required",
            "ccExpiryYear" => "required",
            "cvvNumber" => "required",
            //"amount" => "required",
        ]);
        
        $datos = $request->all();
        if ($validator->passes()) {
            $datos = array_except($datos, array("_token"));
            $stripe = Stripe::make(ENV('STRIPE_SECRET'));
            try {
                $token = $stripe->tokens()->create([
                    "card" => [
                        "number" => $request->get("card_no"),
                        "exp_month" => $request->get("ccExpiryMonth"),
                        "exp_year" => $request->get("ccExpiryYear"),
                        "cvc" => $request->get("cvvNumber"),
                    ],
                ]);
                if (!isset($token["id"])) {
                    return redirect("/");
                }
                $charge = $stripe->charges()->create([
                    "card" => $token["id"],
                    "currency" => "USD",
                    "amount" => session('reservation')['precio'],
                    "description" => "Reservation Renny Travel",
                ]);

                $customer = $stripe->customers()->create([
                    'description' => session('reservation')['nombre']." ".session('reservation')['apellido'],
                    'email' => session('reservation')['correo'],
                ]);

                if ($charge["status"] == "succeeded") {
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
                    foreach (session('carrito')['wifi'] as $wifi) {
                        $wifi["reservation_id"] = $reservation->id;
                        Wifi::create($wifi);
                    }

                    $reservation->id_pago = $charge["id"];
                    $reservation->estado = 1;
                    $reservation->save();
                    $reservation = $reservation::with('transfers','tours','vips','wifis')->where("id",$reservation->id)->first();
                    Mail::to($reservation->correo,"$reservation->nombre $reservation->apellido")->send(new Notification($reservation));
                    Mail::to('manager@rennytravel.com','Manager Renny')->send(new Notification($reservation));
                    session([
                        "reservation" => array(),
                        "carrito" => array(
                            "traslados" => array(),
                            "tours" => array(),
                            "vip" => array(),
                            "wifi" => array(),
                        )
                    ]);
                    return redirect('/')->with('status', 'Reservation Completed');
                } else {
                    \Session::put("error", "Money not add in wallet !!");
                    return redirect('/shop');
                }
            } catch (Exception $e) {
                \Session::put("error", $e->getMessage());
                return redirect('/shop');
            } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
                \Session::put("error", $e->getMessage());
                return redirect('/shop');
            } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                \Session::put("error", $e->getMessage());
                return redirect('/shop');
            }
        }

        //return view('sitio.paypal',compact('reservation'));
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
            foreach (session('carrito')['wifi'] as $wifi) {
                $wifi["reservation_id"] = $reservation->id;
                Vip::create($wifi);
            }

            $reservation->id_pago = $datos["id"];
            $reservation->estado = 1;
            $reservation->save();
            $reservation = $reservation::with('transfers','tours','vips','wifis')->where("id",$reservation->id)->first();
            Mail::to($reservation->correo,"$reservation->nombre $reservation->apellido")->send(new Notification($reservation));
            session([
                "reservation" => array(),
                "carrito" => array(
                    "traslados" => array(),
                    "tours" => array(),
                    "vip" => array(),
                    "wifi" => array(),
                )
            ]);
            return redirect('/')->with('status', 'Reservation Completed');
        }
    }

    public function sessionGet(){
        if(!session('carrito')){
            session([
                "carrito"=> array
                (
                    "traslados" => array(),
                    "tours" => array(),
                    "vip" => array(),
                    "wifi" => array(),
                )
            ]);
        }
        return session('carrito');
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
                "traslados" => array(),
                "tours" => array(),
                "vip" => array(),
                "wifi" => array(),
            )
        ]);
    }

    public function test(){
        return Reservation::with("transfers","tours","vips")->find(1);
    }
}
