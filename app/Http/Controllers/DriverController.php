<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Shipment;
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

    public function show(Driver $driver){
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
        $driver->vehicle_plate = $data['vehicle_plate'];
        $driver->save();
        return redirect()->route('drivers.index')->with('msj', 'Datos de '. $driver->name . ' actualizaron con exito.');
   
    }

    public function destroy(Driver $driver){
        $driver_name = $driver->name;
        if(count(($driver->shipments)) > 0){
            return redirect()->route('drivers.index')
            ->with('msj', 'El chofer ' . $driver_name . ' no se puede borrar porque esta vinculado a un despacho!')
            ->with('type', 'danger');
        }
        $driver->delete();
        return redirect()->route('drivers.index')
            ->with('msj', $driver_name . ' se elimino con exito.')
            ->with('type','success');
    }

    public function get_driver_json(Driver $driver){
        return json_encode($driver);
    }

    public function shipments(){
        return $this->hasMany(Shipment::class);
    }

    
}
