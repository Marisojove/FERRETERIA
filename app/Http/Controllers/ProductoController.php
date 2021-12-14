<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Empleado;
use App\Models\Marca;

class ProductoController extends Controller
{
    public function index(){
        $producto = Producto::all();
        $empleado = Empleado::all();
        $marca = Marca::all();
        return view('producto.index', compact(['producto','empleado','marca']));

    }
    public function create(){
        $producto = Producto::all();
        $empleado = Empleado::all();
        $marca = Marca::all();
        return view('producto.create', compact(['producto','empleado','marca']));

    }

    public function store(Request $request){


        $request ->validate([

         'nombre' => 'required',
         'cantidad' => 'required',
         'idempleado' => 'required',
         'idmarca' => 'required'
          ]);



                $producto = new Producto;

                $producto->nombre  =$request ->  input ('nombre');
                $producto->cantidad  =$request -> input ('cantidad');
                $producto->idempleado  =$request['idempleado'];
                $producto->idmarca  =$request['idmarca'];

                $producto->save();

        $producto = Producto::all();
        $empleado = Empleado::all();
        $marca = Marca::all();
        return view('producto.index', compact(['producto','empleado','marca']));        //return redirect() ->route('empleado.show', $empleado);
            }

    public function show(Producto $producto){
        $producto = Producto::all();
        return view('producto.show', compact ('producto'));

    }
    public function edit(Producto $producto){
        return view('Producto.edit', compact ('producto'));


    }

    public function update(Request $request, Producto $producto){

        $request ->validate([

            'nombre' => 'required',
            'cantidad' => 'required',
            'idempleado' => 'required',
            'idmarca' => 'required'
              ]);

              $producto->nombre  =$request ->  input ('nombre');
              $producto->cantidad  =$request -> input ('cantidad');
              $producto->idempleado  =$request -> input ('idempleado');
              $producto->idmarca  =$request -> input ('idmarca');


        // $paciente->update($fields);
        $producto = Producto::all();
        $empleado = Empleado::all();
        $marca = Marca::all();

         return view('producto.edit', compact (['producto','empleado','marca']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Producto $producto) {
        $producto->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('producto.index')->with('status', 'Producto eliminado');

    }
}

