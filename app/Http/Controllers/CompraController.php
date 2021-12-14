<?php

namespace App\Http\Controllers;

use App\Models\Compra;

use App\Models\Proveedore;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Http\Request;

class CompraController extends Controller
{

    public function index(){
          $compra = Compra::all();
          $proveedor = Proveedore::all();
          $empleado = Empleado::all();
          $producto = Producto::all();
          return view('compra.index', compact(['compra','proveedor','empleado','producto']));

      }
      public function create(){
          $compra = Compra::all();
          $proveedor = Proveedore::all();
          $empleado = Empleado::all();
          $producto = Producto::all();
          return view('compra.create', compact(['compra','proveedor','empleado','producto']));

      }

      public function store(Request $request){


          $request ->validate([

           'fecha' => 'required',
           'idproducto' => 'required',
           'idproveedor' => 'required',
           'idempleado' => 'required'
            ]);



                  $compra = new Compra;

                  $compra->fecha  =$request ->  input ('fecha');
                  $compra->idproducto  =$request -> input ('idproducto');
                  $compra->idproveedor  =$request['idproveedor'];
                  $compra->idempleado  =$request['idempleado'];

                  $compra->save();

          $compra = Compra::all();
          $proveedor = Proveedore::all();
          $empleado = Empleado::all();
          $producto = Producto::all();
          return view('compra.index', compact(['compra','proveedor','empleado','producto']));        //return redirect() ->route('proveedor.show', $proveedor);
              }

      public function show(Compra $compra){
          $compra = Compra::all();
          return view('compra.show', compact ('compra'));

      }
      public function edit(Compra $compra){
          return view('Compra.edit', compact ('compra'));


      }

      public function update(Request $request, Compra $compra){

          $request ->validate([

              'fecha' => 'required',
              'idproducto' => 'required',
              'idproveedor' => 'required',
              'idempleado' => 'required'
                ]);

                $compra->fecha  =$request ->  input ('fecha');
                $compra->idproducto  =$request -> input ('idproducto');
                $compra->idproveedor  =$request -> input ('idproveedor');
                $compra->idempleado  =$request -> input ('idempleado');


          // $paciente->update($fields);
          $compra = Compra::all();
          $proveedor = Proveedore::all();
          $empleado = Empleado::all();
          $producto = Producto::all();

           return view('compra.edit', compact (['compra','proveedor','empleado','producto']));
          // $paciente->save();

           //return redirect() ->route('paciente.show', $paciente);
       }
       public function destroy(Compra $compra) {
          $compra->delete();

         // $paciente = Paciente::all();
        // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
          return redirect()->route('compra.index')->with('status', 'Compra eliminado');

      }
  }

