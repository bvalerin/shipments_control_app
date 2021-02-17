<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller{

    
    function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        
        $customers = DB::table('customers')->get();
        

        return view('customer.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $data = $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|min:8',
                'address' => 'required',
            ],
            [
                'name.required'=> 'El nombre es requerido',
                'name.min'=> 'El nombre debe tener minimo 3 caracteres', 
                'email.required'=> 'El correo es requerido',
                'email.email' => 'El correo digitado es invalido',
                'phone.required'=> 'El telephone es requerido',
                'phone.min'=> 'El telefono debe tener minimo 8 caracteres',
                'address.required'=> 'La direccion es requerida'
            ]
        );

        DB::table('customers')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ]);

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer){
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
