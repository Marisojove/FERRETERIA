<?php

use Illuminate\Support\Facades\Route; //route
use App\Http\Controllers\HomeController; //home
use App\Http\Controllers\ClienteController; //Cliente
use App\Http\Controllers\MarcaController; //Marca
use App\Http\Controllers\ProveedorController; //Proveedor
use App\Http\Controllers\EmpleadoController; //Empleado
use App\Http\Controllers\ProductoController; //Producto
use App\Http\Controllers\CompraController; //Compra
use App\Http\Controllers\VentaController; //Venta
use App\Http\Controllers\TiendaController; //tienda




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

//Route::get('/', HomeController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',  function(){return view('dashboard');})->name('dashboard');
//Route::resource('tiendas', TiendaController::class);
//Route::get('tiendas/{producto}', [TiendaController::class, 'crearPedido'])->name('tiendas.crearPedido');

//cliente
Route::resource('cliente',ClienteController::class);

//marca
Route::resource('marca',MarcaController::class);

//proveedor
Route::resource('proveedor',ProveedorController::class);

//empleado
Route::resource('empleado',EmpleadoController::class);

//producto
Route::resource('producto',ProductoController::class);


//compra
Route::resource('compra',CompraController::class);

//venta
Route::resource('venta',VentaController::class);


