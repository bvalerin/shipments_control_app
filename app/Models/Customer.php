<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model{

    public $timestamps = TRUE;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'contact_name',
        'contact_phone',
        'created_at',
        'updated_at'
    ];
    
    use HasFactory;
}
