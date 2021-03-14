<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $customers = Customer::orderBy('name', 'asc')->paginate(6);
        return view('customer.index', compact('customers'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store(Request $request){
        $data = Customer::validated($request);
        Customer::insert($data);
        return redirect()->route('customers.index')->with('msj', 'Cliente '. $data['name'] . ' se creo con exito.');
    }

    public function show(Customer $customer){
        
    }

    public function edit(Customer $customer){
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer){
        $data = Customer::validated($request);
        $customer->name = $data['name'];
        $customer->dni = $data['dni'];
        $customer->email = $data['email'];
        $customer->phone = $data['phone'];
        $customer->address = $data['address'];
        $customer->contact_name = $data['contact_name'];
        $customer->contact_phone = $data['contact_phone'];
        $customer->save();
        return redirect()->route('customers.index')->with('msj', 'Datos de '. $customer->name . ' actualizaron con exito.');
    }

    public function destroy(Customer $customer){
        $customer_name = $customer->name;
        if(count(($customer->shipments)) > 0){
            return redirect()->route('customers.index')
            ->with('msj', 'El cliente ' . $customer_name . ' no se puede borrar porque esta vinculado a un despacho!')
            ->with('type', 'danger');
        }
        $customer->delete();
        return redirect()->route('customers.index')
            ->with('msj', $customer_name . ' se elimino con exito.')
            ->with('type','success');
    }

    public function get_customer_json(Customer $customer){
        // return json_encode(csrf_token());
        return json_encode($customer);
    }

    public function shipments(){
        return $this->hasMany(Shipment::class);
    }





    #############################PRIVATE FUNCTIONS#################################


}
