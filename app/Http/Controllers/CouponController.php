<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Coupon;
class CouponController extends Controller
{
    public function coupons(){
        $coupons = Coupon::all();
        return view('admin.coupon',compact('coupons'));
    }

    public function getcoupons(){
        return response()->json(Coupon::all());
    }

    public function saveCoupons(Request $request){
        $data = $request->all();
        unset($data['token']);
        return response()->json(Coupon::create($data));
    }

    public function getSpecificCoupons($id){
        return Coupon::where('id',$id)->first();
    }

    public function deleteCoupon(Request $request){
        return Coupon::where('id',$request->input('id'))->delete();
    }

    public function updateCoupon(Request $request){
        $coupon = Coupon::whereId($request->input('id'))->first();

        if( !is_null($coupon) ){
            $coupon->code = $request->input('code');
            $coupon->name = $request->input('name');
            $coupon->percentage = $request->input('percentage');
            $coupon->date_init  = $request->input('date_init');
            $coupon->date_end  = $request->input('date_end');
            $coupon->status    = $request->input('status');
            $coupon->save();
        }else
            return response()->json(['message'=>'Coupon no encontrado'],400);

        return Response()->json(['message'=>"Cupon Actualizado"],200);
    }
}
