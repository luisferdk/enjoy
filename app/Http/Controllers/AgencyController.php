<?php

namespace App\Http\Controllers;
use App\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function indexAgency(){
        return view('sitio.agency');
    }

    public function createAgency(Request $request)
    {
        return response()->json(Agency::create($request->all()), 200);
    }

    public function getAllAgencies(){
        return response()->json(Agency::all(), 200);
    }

    public function getSpecificAgency($id){
        $agency = Agency::where('id',$id)->first();
        return response()->json($agency,200);
    }

    public function deleteAgency($id){
        $agency = Agency::where('id',$id)->first();

        if(!is_null($agency))
            return response()->json($agency->delete(),200);
        else
            return response()->json(['message'=>'Agencia no encontrada!'],200);
    }

    public function updateAgency(Request $request){
        $agency = Agency::where('id',$request->input('id'))->first();
        $data   = $request->all();
        if(!is_null($agency)){
            unset($data['id']);
            return response()->json($agency->update($data),200);
        }else
            return response()->json(['message'=>'Error,no se encontro la agencia!'],200);
    }
}