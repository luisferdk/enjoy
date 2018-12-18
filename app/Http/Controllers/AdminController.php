<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

use App\Reservation;
use App\Transfer;
use App\Tour;
use App\Vip;
use App\Wifi;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function reservas(){
        $reservas = Reservation::with('tours','transfers','vips','wifis')->get();
        return view('admin.reservas',compact('reservas'));
    }

    public function traslados(){
        $reservas = Transfer::with('reservation')->get();
        return view('admin.traslados',compact('reservas'));
    }

    public function tours(){
        $reservas = Tour::with('reservation')->get();
        return view('admin.excursiones',compact('reservas'));
    }

    public function vip(){
        $reservas = Vip::with('reservation')->get();
        return view('admin.vip',compact('reservas'));
    }

    public function wifi(){
        $reservas = Wifi::with('reservation')->get();
        return view('admin.wifi',compact('reservas'));
    }
}
