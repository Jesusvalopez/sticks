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

    /*if(\Illuminate\Support\Facades\Auth::user() && \Illuminate\Support\Facades\Auth::user()->hasRole('Administrador')){
        return redirect('/admin/dashboard');
    }*/

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

        Route::group(['prefix' => 'dashboard',  'middleware' => 'only.admin'],function () {

            Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard.index');
            Route::get('/test', 'Admin\AdminController@test')->name('admin.dashboard.test');


        });


    }
    if($prefix == 'dashboard') {
        Route::resource('/', 'Dashboard\UserDashboardController');

    }
    });
}
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
