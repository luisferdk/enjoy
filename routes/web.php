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
Route::get('/admin/excursiones', 'AdminController@excursiones');
Route::get('/admin/vip', 'AdminController@vip');
Route::get('/admin/wifi', 'AdminController@wifi');