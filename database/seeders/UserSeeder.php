<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            'name' => 'Bryan Valerin',
            'email' => 'bryanvalerin@gmail.com',
            'phone' => '8316-8485',
            'password' => Hash::make("Contra123")
        ]);
    }
}
