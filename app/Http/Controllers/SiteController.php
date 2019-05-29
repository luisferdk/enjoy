<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Reservation;
use App\Transfer;
use App\Tour;

use App\Mail\ContactMail;

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

  public function contactPOST(Request $request)
  {
    Mail::to("luisdk.03@gmail.com","Contact Us")->send(new ContactMail($request->all()));
    return redirect('contact')->with('status','Send');
  }

  public function CancellationAndRefund()
  {
    return view('sitio2.CancellationAndRefund');
  }
  public function paymentMethods()
  {
    return view('sitio2.paymentMethods');
  }
  public function useAndPrivacy()
  {
    return view('sitio2.useAndPrivacy');
  }
  public function exhortation()
  {
    return view('sitio2.exhortation');
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

  public function completed(){
    return redirect('/')->with('status',"Completed");
  }
  public function ipn(Request $request)
  {
    $datos = $request->all();
    $reservation = Reservation::with('transfers', 'tours', 'vips', 'wifis', 'flights')->find($datos["item_number"]);
    if ($datos['payment_status'] == "Completed") {
      $reservation->id_pago = $datos["txn_id"];
      $reservation->estado = 1;
      $reservation->save();
      Mail::to($reservation->correo, "$reservation->nombre $reservation->apellido")->send($reservation);
      session([
        "reservation" => array(),
        "carrito" => array(
          "traslados" => array(),
          "tours" => array(),
          "hoteles" => array()
        )
      ]);
    }
  }

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
