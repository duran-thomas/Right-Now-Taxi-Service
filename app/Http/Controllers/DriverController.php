<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Driver;
use App\Vehicle;
use App\Route;


class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = DB::table('driver')->get();
        $routes = DB::table('routes')->first();
        $vehicle = DB::table('vehicle')->first();
        return view::make('/admin/driver', compact('driver', 'vehicle', 'routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $driver = new Driver();
        $driver->driverID = $request->driverID;
        $driver->name = $request->name;
        $driver->address = $request->address;
        $driver->contact = $request->contact;
        $driver->status = $request->status;

        $vehicle = new Vehicle();
        $vehicle->driverID = $request->driverID;
        $vehicle->vehicleMake = $request->vehicleMake;
        $vehicle->vehicleModel = $request->vehicleModel;
        $vehicle->vehicleYear = $request->vehicleYear;
        $vehicle->lisencePlate = $request->licensePlate;

        $route = new Route();
        $route->driverID = $request->driverID;
        $route->routes = $request->routes;

        //dd($request);
        $driver->save();
        $vehicle->save();
        $route->save();

        return redirect('/admin/driver');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver, Vehicle $vehicle, Route $routes)
    {
        $driver = DB::table('driver')->get();
        $vehicle = DB::table('vehicle')->get();
        $routes = DB::table('routes')->get();

        
        return view::make('admin/driver', compact($driver, $vehicle, $routes));
    }

    public function driverList()
    {
        $driver = DB::table('driver')->select('*');
        return datatables()->of($driver)
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $driver = Driver::findOrFail($request->driverID);
        $vehicle = Vehicle::findOrFail($request->driverID);
        $routes = Route::findOrFail($request->driverID);

        $driver->update($request->all());
        $vehicle->update($request->all());
        $routes->update($request->all());
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $driver = Driver::findOrFail($request->driverID);
        $vehicle = Vehicle::vehicle($request->driverID);
        $routes = Route::findOrFail($request->driverID);
        $driver->update($request->all());
        $vehicle->update($request->all());
        $routes->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Stock::findOrFail($request->driverID);

        $driver->delete($request->all());
        return back();
    }
}
