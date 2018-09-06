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


Route::get('login', 'AdminController@login')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@admin');
});