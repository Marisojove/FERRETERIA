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

Route::get('/', HomeController::class);
//cliente
Route::get('clientes', [ClienteController::class,'index'] )->name('clientes.index');
Route::get('clientes/create', [ClienteController::class,'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class,'store'])->name('clientes.store');
Route::get('clientes/{cliente}', [ClienteController::class,'show'])->name('clientes.show');
Route::get('clientes/{cliente}/edit', [ClienteController::class,'edit'])->name('clientes.edit');
Route::put('clientes/{cliente}', [ClienteController::class,'store'])->name('clientes.update');

//marca
Route::get('marca', [marcaController::class,'index'] );
Route::get('marca/create', [marcaController::class,'create']);
Route::get('marca/{marca}', [marcaController::class,'show']);

//proveedor
Route::get('proveedor', [ProveedorController::class,'index'] );
Route::get('proveedor/create', [ProveedorController::class,'create']);
Route::get('proveedor/{proveedor}', [ProveedorController::class,'show']);

//empleado
Route::get('empleado', [EmpleadoController::class,'index'] );
Route::get('empleado/create', [EmpleadoController::class,'create']);
Route::get('empleado/{empleado}', [EmpleadoController::class,'show']);

//producto
Route::get('producto', [ProductoController::class,'index'] );
Route::get('producto/create', [ProductoController::class,'create']);
Route::get('producto/{producto}', [ProductoController::class,'show']);

//compra
Route::get('compra', [CompraController::class,'index'] );
Route::get('compra/create', [CompraController::class,'create']);
Route::get('compra/{compra}', [CompraController::class,'show']);

//venta
Route::get('venta', [VentaController::class,'index'] );
Route::get('venta/create', [VentaController::class,'create']);
Route::get('venta/{venta}', [VentaController::class,'show']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
