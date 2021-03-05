<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Customer;
use App\Models\Shipment;

use Illuminate\Http\Request;

use PDF;

class ShipmentController extends Controller{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $shipments = Shipment::orderBy('shipment_date', 'DESC')->paginate(6);
        return view('shipment.index', compact('shipments'));
    }

    public function create(){
        $customers = Customer::all();
        $drivers = Driver::all();
        return view('shipment.create',compact('customers','drivers'));
    }

    public function store(Request $request){
        $data = Shipment::validated($request);
        $data['user_id'] = auth()->id();
        Shipment::insert($data);
        return redirect()->route('shipments.index')->with('msj', 'Despacho se creo con exito.');
    }


    public function show(Shipment $shipment){

    }

    public function edit(Shipment $shipment){

    }


    public function update(Request $request, Shipment $shipment){

    }

    public function destroy(Shipment $shipment){
    }

    public function download(Request $request, Shipment $shipment){
        $data = [
            'shipment' => $shipment,
            'customer' => $shipment->customer,
            'driver' => $shipment->driver
        ];
        $pdf = PDF::loadView('shipment.pdf.shipment_pdf', $data);
        return $pdf->download('shipment.pdf');
    }

}
