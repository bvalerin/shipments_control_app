<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $drivers = Driver::orderBy('name', 'asc')->paginate(6);
        return view('driver.index', compact('drivers'));
    }

    public function create(){
        return view('driver.create');
    }

    public function store(Request $request){
        $data = Driver::validated($request);
        Driver::insert($data);
        return redirect()->route('drivers.index')->with('msj', 'Chofer '. $data['name'] . ' se creo con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    public function edit(Driver $driver){
        return view('driver.edit', compact('driver'));
    }

    public function update(Request $request, Driver $driver){
        $data = Driver::validated($request);
        $driver->name = $data['name'];
        $driver->dni = $data['dni'];
        $driver->email = $data['email'];
        $driver->phone = $data['phone'];
        $driver->address = $data['address'];
        $driver->save();
        return redirect()->route('drivers.index')->with('msj', 'Datos de '. $driver->name . ' actualizaron con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
