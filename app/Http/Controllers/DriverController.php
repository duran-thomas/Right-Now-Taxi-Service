<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Driver;


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
        return view::make('/admin/driver', compact('driver'));
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
        $driver->vehicleMake = $request->vehicleMake;
        $driver->vehicleModel = $request->vehicleModel;
        $driver->vehicleYear = $request->vehicleYear;
        $driver->lisencePlate = $request->licensePlate;
        $driver->routes = $request->routes;

        //dd($request);
        $driver->save();

        return redirect('/admin/driver');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        $driver = DB::table('driver')->get();
        
        return view::make('admin/driver', compact($driver));
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

        $driver->update($request->all());
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
        $driver->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $driver = Driver::findOrFail($request->driverID);

        $driver->delete($request->all());
        return back();
    }
}
