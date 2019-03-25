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

Route::get('/clientpage', function () {
    return view('clientpage');
});

Route::get('/clientpg2', function () {
    return view('clientpg2');
});


Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/cabRequest', function () {
    return view('cabRequest');
});

Route::get('/rateUs', function () {
    return view('rateUs');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return redirect()->route("login");
});

Auth::routes(['verify'=>true]);

Route::group(['middleware' => ['verified', 'auth']], function () {

    Route::get('/admin/home', 'HomeController@index')->name('/admin/home');

});

Route::resource('admin/driver', 'DriverController')->middleware('auth');
Route::get('/Googlemaps','Googlemaps@Googlemaps');
