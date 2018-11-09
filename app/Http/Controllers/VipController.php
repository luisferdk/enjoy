<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vip;
class VipController extends Controller
{

    public function update(Request $request, $id)
    {
        $reservation = Vip::with('reservation')->find($id);
        $reservation->estado = $request->estado;
        $reservation->save();
        return $reservation;
    }
}
