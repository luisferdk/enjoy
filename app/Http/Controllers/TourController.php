<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;
class TourController extends Controller
{

    public function update(Request $request, $id)
    {
        $reservation = Tour::with('reservation')->find($id);
        $reservation->estado = $request->estado;
        $reservation->save();
        return $reservation;
    }
}
