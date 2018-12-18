<?php
Route::get('/', "SiteController@index");
Route::get('/partyBoats', "SiteController@partyBoats");
Route::get('/partyBoats/{id}', "SiteController@tour");
Route::get('/tours', "SiteController@tours");
Route::get('/tour/{id}', "SiteController@tour");
Route::get('/packages', "SiteController@packages");
Route::post('/packages', "SiteController@packagesPOST");
Route::get('/wifiServices', "SiteController@wifiServices");
Route::get('/puntacana', "SiteController@puntacana");
Route::get('/shop', "SiteController@shopGet");
Route::post('/shop', "SiteController@shopPost");
Route::get('/ipn', 'SiteController@ipn');

Route::get('/session', "SiteController@sessionGet");
Route::post('/session', "SiteController@sessionPost");
Route::get('/borrar', "SiteController@borrar");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/reservas', 'AdminController@reservas');
Route::get('/admin/traslados', 'AdminController@traslados');
Route::get('/admin/tours', 'AdminController@tours');
Route::get('/admin/vip', 'AdminController@vip');
Route::get('/admin/wifi', 'AdminController@wifi');

Route::get('admin/coupon','CouponController@coupons');
Route::get('admin/getcoupons','CouponController@getcoupons');
Route::post('admin/savecoupons','CouponController@saveCoupons');

Route::post('/user/create','UserController@createUser');
Route::get('/user/confirm/{token}','UserController@confirm');
Route::get('/result-confirm/{message}','UserController@resultConfirm');

use App\Reservation;
use App\Mail\Notification;
Route::get('/correo/reservation/{id}',function($id){
    $reservation = Reservation::with('transfers','vips','tours')->find($id);
    return new Notification($reservation);
});




Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));