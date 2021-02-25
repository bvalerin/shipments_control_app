<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('customers')->insert([
            'name' => 'Customer 1',
            'email' => 'driver1.cubero@gmail.com',
            'phone' => '4444-5555',
            'address' => "Esta es la direccion de su casa"
        ]);

        DB::table('customers')->insert([
            'name' => 'Customer 2',
            'email' => 'driver1.cubero@gmail.com',
            'phone' => '4444-5555',
            'address' => "Esta es la direccion de su casa del cliente 2"
        ]);

    }
}
