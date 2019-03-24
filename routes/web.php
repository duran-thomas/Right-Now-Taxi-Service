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

<<<<<<< HEAD
Route::get('/clientpage', function () {
    return view('clientpage');
});

Auth::routes();

=======
>>>>>>> da6e3f8bc99d82a18c5f4e73cc96cfbc4dbc209e
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return redirect()->route("login");
});

Auth::routes(['verify'=>true]);

Route::group(['middleware' => ['verified', 'auth']], function () {

    Route::get('/admin/home', 'HomeController@index')->name('/admin/home');

});

Route::resource('admin/driver', 'DriverController')->middleware('auth');