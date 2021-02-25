<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriverSeeder extends Seeder{

    public function run(){
        DB::table('drivers')->insert([
            'name' => 'Arturo Cubero',
            'email' => 'arturo.cubero@gmail.com',
            'phone' => '2222-3333',
        ]);

        DB::table('drivers')->insert([
            'name' => 'Driver 1',
            'email' => 'driver1.cubero@gmail.com',
            'phone' => '4444-5555',
        ]);
    }
}
