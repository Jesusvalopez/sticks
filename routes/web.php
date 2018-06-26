<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //Utilizar esta url para los tiempos de los pedidos
   // https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=Hermanos+Amun%C3%A1tegui+695,Santiago,Regi%C3%B3n+Metropolitana&destinations=Villaseca+701,%C3%91u%C3%B1oa,Regi%C3%B3n+Metropolitana&departure_time=now&key=AIzaSyCI_A_vgNYu8_CXuyNWvIKWZ9c3MYdjQBM

    return view('home.index');
});


$units = array(
    'admin' => 'Admin',
    'dashboard' => 'Dashboard',

);

foreach ($units as $prefix => $namespace){

    Route::group(array('prefix' => $prefix), function () use ($prefix, $namespace) {

    if($prefix == 'admin'){
        Route::resource('/', 'Admin\AdminController');

    }
    if($prefix == 'dashboard') {
        Route::resource('/', 'Dashboard\UserDashboardController');

    }
    });
}
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
