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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', function(){
//     $customer = DB::table('customer')->first();
//     return view('home', compact('customer'));
//     //return View::make('home')->with('customer', $customer);
// });

Route::get('/admin', function(){
    return redirect()->route("login");
});

Auth::routes(['verify'=>true]);

Route::group(['middleware' => ['verified', 'auth']], function () {

    Route::get('/admin/home', 'HomeController@index')->name('/admin/home');

});

Route::resource('admin/driver', 'DriverController')->middleware('auth');
Route::get('/Googlemaps','Googlemaps@Googlemaps');

Route::resource('/customerLogin', 'CustomerLoginController');
Route::resource('/customerRegister', 'CustomerRegisterController');

Route::post('/loggedin', 'customerLoginController@login');
Route::get('/customerHome', 'CustomerController@index');
Route::post('/customerHome/request', 'CustomerController@createRequest');
//Route::resource('/confirmRequest', 'TaxiController');
Route::post('confirmRequest', 'TaxiController@index');
Route::post('/testInfo', 'TaxiController@test');
