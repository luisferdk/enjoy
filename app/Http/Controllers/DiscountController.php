<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function applyDiscount(Request $request){
        return response()->json($request->all());
    }
}
