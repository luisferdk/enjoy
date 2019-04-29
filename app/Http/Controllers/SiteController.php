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
use App\Flight;
use App\Passenger;

use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;

class SiteController extends Controller
{
  public function index2()
  {
    return view('sitio2.index');
  }

  public function flights()
  {
    return view('sitio2.flights');
  }

  public function transfers()
  {
    return view('sitio2.transfers');
  }

  public function excursions()
  {
    return view('sitio2.excursions');
  }

  public function excursion($id)
  {
    return view('sitio2.excursion', compact('id'));
  }

  public function aboutUs()
  {
    return view('sitio2.aboutUs');
  }

  public function contact()
  {
    return view('sitio2.contact');
  }

  public function shop()
  {
    return view('sitio2.shop');
  }

  public function index()
  {
    return view('sitio.index');
  }

  public function partyBoats()
  {
    return view('sitio.partyBoats');
  }

  public function tours()
  {
    return view('sitio.tours');
  }

  public function tour($id)
  {
    return view('sitio.tour', compact('id'));
  }

  public function packages()
  {
    return view('sitio.packages');
  }

  public function packagesPOST(Request $request)
  {
    //Mail::to($request->correo,"$request->nombre")->send(new Package($request->all()));
    return redirect('/packages')->with('status', 'Reservation Completed');
  }

  public function wifiServices()
  {
    return view('sitio.wifiServices');
  }

  public function puntacana()
  {
    return view('sitio.puntacana');
  }

  public function shopGet()
  {
    return view('sitio.shop');
  }
  public function shopPost(Request $request)
  {
    $data = $request->all();
    if (!isset($data['precio']))
      $data['precio'] = $request->input('finalPrice');

    session(
      ["reservation" => $data]
    );

    $datos = $request->all();
    $reservation = Reservation::create(session("reservation"));
    foreach (session('carrito')['traslados'] as $traslado) {
      $traslado["reservation_id"] = $reservation->id;
      Transfer::create($traslado);
    }
    foreach (session('carrito')['tours'] as $tour) {
      $tour["reservation_id"] = $reservation->id;
      Tour::create($tour);
    }
    session([
      "reservation" => array(),
      "carrito" => array(
        "traslados" => array(),
        "tours" => array(),
        "hoteles" => array()
      )
    ]);
    return view('sitio.paypal',compact('reservation'));
  }

  /* public function ipn(Request $request)
  {
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
      $reservation->id_pago = $datos["id"];
      $reservation->estado = 1;
      $reservation->save();
      $reservation = $reservation::with('transfers', 'tours', 'vips', 'wifis', 'flights')->where("id", $reservation->id)->first();
      Mail::to($reservation->correo, "$reservation->nombre $reservation->apellido")->send(new Notification($reservation));
      session([
        "reservation" => array(),
        "carrito" => array(
          "traslados" => array(),
          "tours" => array(),
          "hoteles" => array()
        )
      ]);
      return redirect('/')->with('status', 'Reservation Completed');
    }
  } */

  public function sessionGet()
  {
    if (!session('carrito')) {
      session([
        "carrito" => array(
          "traslados" => array(),
          "tours" => array(),
          "hoteles" => array()
        )
      ]);
    }
    return session('carrito');
  }

  public function sessionPost(Request $request)
  {
    session([
      "carrito" => $request->all()
    ]);
  }

  public function borrar()
  {
    session([
      "carrito" => array(
        "traslados" => array(),
        "tours" => array(),
        "hoteles" => array()
      )
    ]);
  }
}
