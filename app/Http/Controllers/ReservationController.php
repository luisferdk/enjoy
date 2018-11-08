<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservation;
class ReservationController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::with('tours','vips','transfers')->find($id);
        $reservation->estado = $request->estado;
        $reservation->save();
        return $reservation;
    }

    public function destroy($id)
    {
        //
    }
}
