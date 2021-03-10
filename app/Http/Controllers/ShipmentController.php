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

        $data = Shipment::validated($request);
        $data['user_id'] = auth()->id();

        dd($data);

        $result  = Shipment::insert($data);
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
            'driver' => $shipment->driver,
            'user' => auth()->user()
        ];

        $pdf = PDF::loadView('shipment.pdf.shipment_pdf', $data)->setPaper('a4', 'portrait');
        return $pdf->download('shipment.pdf');
    }

}
