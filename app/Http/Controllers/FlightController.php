<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function update(Request $request, $id)
    {
        $reservation = Flight::with('reservation')->find($id);
        $reservation->estado = $request->estado;
        $reservation->save();
        return $reservation;
    }
}
