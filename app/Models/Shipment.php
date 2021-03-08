<?php

namespace App\Models;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipment extends Model{

    protected $fillable = [
        'origin',
        'destination',
        'user_id',
        'customer_id',
        'driver_id',
        'shipment_date',
        'instructions',
        'container_number',
        'container_size',
        'chasis_number',
        'vehicle_plate',
        'shipment_state',
    ];

    
    use HasFactory;

    public static function validated(Request $request){
        return $request->validate(
            [
                'customer_id' => 'required|exists:customers,id',
                'driver_id' => 'required|exists:drivers,id',
                'origin' => 'required',
                'destination' => 'required',
                'shipment_date' => 'required',
                'container_number' => 'required',
                'container_size' => 'required',
                'chasis_number' => 'required',
                'vehicle_plate' => 'required',
                'instructions' => 'nullable',
            ],
            [
                'customer_id.exists' => 'El cliente ingresado no esta registrado',
                'driver_id.exists' => 'El chofer ingresado no existe',
                'origin.required'=> 'El origen es requrido',
                'destination.required'=> 'El destino es reque0rido', 
                'shipment_date.required'=> 'La fecha de colocacion es requerida',
                'container_number.required' => 'El numero de contenedor es requerido',
                'container_size.required' => 'El tamaño del contenedor es requerido',
                'chasis_number.required'=> 'El numero de chasis es requerido',
                'vehicle_plate.required'=> 'La placa del vehiculo es requerida',
                'address.required'=> 'La direccion es requerida'
            ]
        );
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function driver(){
        return $this->belongsTo(Driver::class);
    }

}
