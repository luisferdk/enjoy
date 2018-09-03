<?php
use Illuminate\Http\Request;

Route::get('/', "SiteController@index");
Route::get('/partyBoats', "SiteController@partyBoats");
Route::get('/partyBoats/{id}', "SiteController@tour");
Route::get('/tours', "SiteController@tours");
Route::get('/tour/{id}', "SiteController@tour");
Route::get('/packages', "SiteController@packages");
Route::get('/wifiServices', "SiteController@wifiServices");
Route::get('/puntacana', "SiteController@puntacana");
Route::get('/shop', "SiteController@shop");

Route::get('/session',function(){
	if(session('carrito')){
		return session('carrito');
	}
	else{
		session([
			"carrito"=> array
			(
				"traslados"=>array(),
				"tours"=>array(),
				"vip"=>array(),
			)
		]);
	}
});

Route::post('session',function(Request $request){
	session([
		"carrito" => $request->all()
	]);
});


Route::get('/borrar',function(){
	session([
		"carrito"=> array
		(
			"traslados"=>array(),
			"tours"=>array(),
			"vip"=>array(),
		)
	]);
});