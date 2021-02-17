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
Route::get('/clientes', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
Route::get('/clientes/crear', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
Route::post('/clientes', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');