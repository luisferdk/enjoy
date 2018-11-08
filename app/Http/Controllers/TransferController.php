<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transfer;
class TransferController extends Controller
{

    public function update(Request $request, $id)
    {
        $reservation = Transfer::with('reservation')->find($id);
        $reservation->estado = $request->estado;
        $reservation->save();
        return $reservation;
    }
}
