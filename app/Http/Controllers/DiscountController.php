<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function applyDiscount(Request $request){
        return $this->validDiscount($request->input('agency_id')) ? response()->json(Discount::create($request->all())) : response()->json(false);
    }

    public function getAgencyDiscount($id){
        $ageDis = Agency::with('discounts')->where('id',$id)->first();
        return response()->json($ageDis);
    }

    public function validDiscount($id){
        $valid = Discount::whereId($id)->where('status',1)->count();

        if($valid > 0)
            return false;
        else
            return true;
    }

    public function removeDiscount($id){
        return response()->json(Discount::whereId($id)->update(['status' => 0]));
    }

    public function updateDiscount(Request $request){
        $dis = Discount::whereId($request->input('id'))->first();

        if( !is_null($dis) ){
            $data = $request->all();
            unset( $data['id'] );
            return response()->json( $dis->update() );
        }
        return response()->json(false);
    }
}
