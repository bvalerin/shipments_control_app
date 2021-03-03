<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#Customer routes
Route::get('/clientes', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
Route::get('/clientes/crear', [App\Http\Controllers\CustomerController::class, 'create'])->name('customers.create');
Route::post('/clientes', [App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');
Route::get('/clientes/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customers.edit');
Route::get('/clientes/{customer}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customers.update');
Route::get('/clientes/{customer}/json', [App\Http\Controllers\CustomerController::class, 'get_customer_json'])->name('customers.get_customer_json');

#Drivers routes
Route::get('/choferes', [App\Http\Controllers\DriverController::class, 'index'])->name('drivers.index');
Route::get('/choferes/crear', [App\Http\Controllers\DriverController::class, 'create'])->name('drivers.create');
Route::post('/choferes', [App\Http\Controllers\DriverController::class, 'store'])->name('drivers.store');
Route::get('/choferes/{driver}/edit', [App\Http\Controllers\DriverController::class, 'edit'])->name('drivers.edit');

Route::get('/choferes/{driver}', [App\Http\Controllers\DriverController::class, 'update'])->name('drivers.update');

Route::get('/choferes/{driver}/json', [App\Http\Controllers\DriverController::class, 'get_driver_json'])->name('drivers.get_driver_json');


#Shipments routes
Route::get('/despachos', [App\Http\Controllers\ShipmentController::class, 'index'])->name('shipments.index');
Route::get('/despachos/crear', [App\Http\Controllers\ShipmentController::class, 'create'])->name('shipments.create');
Route::post('/despachos', [App\Http\Controllers\ShipmentController::class, 'store'])->name('shipments.store');
















