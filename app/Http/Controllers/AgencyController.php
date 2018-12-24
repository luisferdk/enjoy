<?php

namespace App\Http\Controllers;
use App\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AgencyCreated;
use App\Mail\AgencyConfirmed;

class AgencyController extends Controller
{

    public function indexAgency(){
        return view('sitio.agency');
    }

    public function viewAdminAgency(){
        return view('admin.agency');
    }

    public function createAgency(Request $request)
    {
        $agency = Agency::create($request->all());
        $this->sendEmailAgencyRegisted($agency->company_name,$agency->email);
        return response()->json($agency, 200);
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

    public function sendEmailAgencyRegisted($agencyName,$agencyEmail){
        Mail::to($agencyEmail)->send(new AgencyCreated($agencyName));
    }

    public function sendEmailAgencyConfirmed(Request $request){
        $agen = Agency::whereId($request->input('id'))->first();

        if($agen != null){
            $agen->update(['status'=>1]);
            Mail::to($agen->email)->send(new AgencyConfirmed($agen->company_name,$agen->email));
            return response()->json(['message'=>'good'],200);
        }
        return response()->json(['message'=>'bad'],200);
    }
}