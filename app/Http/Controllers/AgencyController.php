<?php

namespace App\Http\Controllers;
use App\Agency;
use App\User;
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

    public static function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';

	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }

        return $randomString;
    }

    public function createAgency(Request $request)
    {
        if( self::checkEmailUser($request->input('email')) ){
            $dataAll = $request->all();
            $dataAll['comment'] = is_null($request->input('email')) || $request->input('email') == '' ? "" : $request->input('email');
            $agency = Agency::create($dataAll);
            $this->sendEmailAgencyRegisted($agency->host_agency_name,$agency->email);
            return response()->json(['message'=>'Agencia Registrada exitosamente','status'=>1], 200);
        }else
            return response()->json(['message'=>'El email introducido esta en uso','status'=>0],400);
    }

    public static function checkEmailUser($email){
        $user   = User::whereEmail($email)->first();
        $agency = Agency::whereEmail($email)->first();

        if ( is_null($user) && is_null($agency) )
            return true;
        else
            return false;
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

    public function isConfirmed($email){
        $agen = Agency::whereEmail($email)->first();

        if(!is_null($agen)){
            if($agen->status == 1)
                return true;
            else
                return false;
        }
        return false;
    }

    public function sendEmailAgencyConfirmed(Request $request){
        $agen = Agency::whereId($request->input('id'))->first();

        if($agen != null){

            if($this->isConfirmed($agen->email))
                return response()->json('confirmed',200);

            $agen->update(['status'=>1]);
            $pass = self::generateRandomString();
            User::create([
                'name'  => $agen->host_agency_name,
                'email' => $agen->email,
                'password' => bcrypt($pass),
                'type'  => 3,
                'token' => ''
            ]);

            Mail::to($agen->email)->send(new AgencyConfirmed($agen->host_agency_name,$agen->email,$pass));
            return response()->json(['message'=>'good'],200);
        }
        return response()->json(['message'=>'bad'],200);
    }
}