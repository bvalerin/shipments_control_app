<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Driver;
use App\Models\Customer;

use App\Models\Shipment;

use Illuminate\Http\Request;

class ShipmentController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        
        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();
            
        $shipments = Shipment::orderBy('shipment_date', 'DESC')->paginate(6);
        return view('shipment.index', compact('shipments'));
    }

    public function create(){
        $customers = Customer::all();
        $drivers = Driver::all();
        return view('shipment.create',compact('customers','drivers'));
    }

    public function store(Request $request){
        $data =  Shipment::validated($request);

        $data['user_id'] = auth()->id();
        $result  = Shipment::insert($data);
        return redirect()->route('shipments.index')->with('msj', 'Despacho se creo con exito.');
    }


    public function show(Shipment $shipment){

    }

    public function edit(Shipment $shipment){
        $customers = Customer::all();
        $drivers = Driver::all();
        return view('shipment.edit',compact('customers','drivers','shipment'));
    }


    public function update(Request $request, Shipment $shipment){
        $data = Shipment::validated($request);
        $shipment->customer_id = $data['customer_id'];
        $shipment->driver_id = $data['driver_id'];
        $shipment->origin = $data['origin'];
        $shipment->destination = $data['destination'];
        $shipment->shipment_date = $data['shipment_date'];
        $shipment->container_number = $data['container_number'];
        $shipment->container_plate = $data['container_plate'];
        $shipment->container_size = $data['container_size'];
        $shipment->container_axle = $data['container_axle'];
        $shipment->chasis_number = $data['chasis_number'];
        $shipment->vehicle_plate = $data['vehicle_plate'];
        $shipment->instructions = $data['instructions'];
        $shipment->booking_number = $data['booking_number'];
        $shipment->retire_from = $data['retire_from'];
        $shipment->save();
        return redirect()->route('shipments.index')->with('msj', 'Datos del despacho se actualizaron con exito.');
    }

    public function destroy(Shipment $shipment){
        $shipment->delete();
        return redirect()->route('shipments.index')
            ->with('msj', 'Despacho se elimino con exito.')
            ->with('type','success');
    }

    public function download(Request $request, Shipment $shipment){
        $logo = base64_encode(file_get_contents(public_path('img/logo_mym.jpeg')));
        $data = [
            'shipment' => $shipment,
            'customer' => $shipment->customer,
            'driver' => $shipment->driver,
            'user' => auth()->user(),
            'logo' => $logo
        ];
        $pdf = PDF::loadView('shipment.pdf.shipment_pdf', $data)->setPaper('a4', 'portrait');
        return $pdf->download('shipment.pdf');
    }

    public function download_retire_slip(Request $request, Shipment $shipment){
        $data = [
            'shipment' => $shipment,
            'customer' => $shipment->customer,
            'driver' => $shipment->driver,
            'user' => auth()->user()
        ];

        $pdf = PDF::loadView('shipment.pdf.retire_slip_pdf', $data)->setPaper('a4', 'portrait');
        return $pdf->download('shipment.pdf');
    }

    

}
