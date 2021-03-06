<?php
Route::get('/', "SiteController@index2");
Route::get('/flights', "SiteController@flights");
Route::get('/transfers', "SiteController@transfers");
Route::get('/excursions', "SiteController@excursions");
Route::get('/excursion/{id}', "SiteController@excursion");
Route::get('/contact', "SiteController@contact");
Route::post('/contact', "SiteController@contactPOST");
Route::get('/cancellation-and-refund', "SiteController@CancellationAndRefund");
Route::get('/payment-methods', "SiteController@paymentMethods");
Route::get('/use-and-privacy', "SiteController@useAndPrivacy");
Route::get('/exhortation', "SiteController@exhortation");
Route::get('/aboutUs', "SiteController@aboutUs");
Route::get('/shop', "SiteController@shop");
Route::post('/shop', "SiteController@shopPost");
Route::post('/ipn', 'SiteController@ipn');
Route::get('/completed', 'SiteController@completed');
Route::get('/session', "SiteController@sessionGet");
Route::post('/session', "SiteController@sessionPost");
Route::get('/borrar', "SiteController@borrar");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/reservas', 'AdminController@reservas');
Route::get('/admin/traslados', 'AdminController@traslados');
Route::get('/admin/excursiones', 'AdminController@tours');
Route::get('/admin/hoteles', 'AdminController@hoteles');
//Route::get('/admin/vip', 'AdminController@vip');
//Route::get('/admin/wifi', 'AdminController@wifi');

Route::get('admin/coupon','CouponController@coupons')->middleware('auth');
Route::get('admin/getcoupons','CouponController@getcoupons');
Route::post('admin/savecoupons','CouponController@saveCoupons');
Route::post('admin/updatecoupons','CouponController@updateCoupon');
Route::post('admin/deletecoupons','CouponController@deleteCoupon');
Route::get('admin/getspecific-coupon/{id}','CouponController@getSpecificCoupons');
Route::get('getcouponValue','CouponController@getSpecificCouponsByCode');

Route::post('/user/create','UserController@createUser');
Route::get('/user/confirm/{token}','UserController@confirm');
Route::get('/result-confirm/{message}','UserController@resultConfirm');

use App\Reservation;
use App\Mail\Notification;
Route::get('/correo/reservation/{id}',function($id){
    $reservation = Reservation::with('transfers','vips','tours')->find($id);
    return new Notification($reservation);
});


Route::get('register-agency','AgencyController@indexAgency');
Route::post('saveagency','AgencyController@createAgency');
Route::get('admin/agency','AgencyController@viewAdminAgency');
Route::get('admin/delete-agency/{id}','AgencyController@deleteAgency');
Route::get('admin/change-status','AgencyController@sendEmailAgencyConfirmed');
Route::get('admin/getagencies','AgencyController@getAllAgencies');

Route::post('admin/apply-discount','DiscountController@applyDiscount');

Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));

Route::get('admin/users','UserController@viewAdminUser')->middleware('auth');
Route::get('admin/delUser/{id}','UserController@deleteUser');
Route::get('admin/alluser','UserController@getAllUser');
Route::post('admin/updateusu','UserController@updateUser');
Route::post('admin/create-user-admin','UserController@createUser');

Route::get('get-data-session','GetDataSession@getdataSession');

//login
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');
//end login */