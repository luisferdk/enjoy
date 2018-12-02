<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Wifi;
class WifiController extends Controller
{

    public function update(Request $request, $id)
    {
        $reservation = Wifi::with('reservation')->find($id);
        $reservation->estado = $request->estado;
        $reservation->save();
        return $reservation;
    }
}
