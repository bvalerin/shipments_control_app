<?php
namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    public $timestamps = TRUE;
    protected $fillable = [
        'name',
        'dni',
        'email',
        'phone',
        'address',
        'contact_name',
        'contact_phone',
        'created_at',
        'updated_at'
    ];

    public static function validated(Request $request){
        return $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|min:8',
                'address' => 'required',
                'dni' => 'nullable',
                'contact_name' => 'nullable',
                'contact_phone' => 'nullable',
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
    }





}
