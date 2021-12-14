<?php

namespace App\Http\Controllers;
use App\Models\Venta;

use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        $venta = Venta::all();
        $cliente = Cliente::all();
        $empleado = Empleado::all();
        $producto = Producto::all();
        return view('venta.index', compact(['venta','cliente','empleado','producto']));

    }
    public function create(){
        $venta = Venta::all();
        $cliente = Cliente::all();
        $empleado = Empleado::all();
        $producto = Producto::all();
        return view('venta.create', compact(['venta','cliente','empleado','producto']));

    }

    public function store(Request $request){


        $request ->validate([

         'precio' => 'required',
         'idproducto' => 'required',
         'idcliente' => 'required',
         'idempleado' => 'required'
          ]);



                $venta = new Venta;

                $venta->precio  =$request ->  input ('precio');
                $venta->idproducto  =$request -> input ('idproducto');
                $venta->idcliente  =$request['idcliente'];
                $venta->idempleado  =$request['idempleado'];

                $venta->save();

        $venta = Venta::all();
        $cliente = Cliente::all();
        $empleado = Empleado::all();
        $producto = Producto::all();
        return view('venta.index', compact(['venta','cliente','empleado','producto']));        //return redirect() ->route('cliente.show', $cliente);
            }

    public function show(Venta $venta){
        $venta = Venta::all();
        return view('venta.show', compact ('venta'));

    }
    public function edit(Venta $venta){
        return view('venta.edit', compact ('venta'));


    }

    public function update(Request $request, Venta $venta){

        $request ->validate([

            'precio' => 'required',
            'idproducto' => 'required',
            'idcliente' => 'required',
            'idempleado' => 'required'
              ]);

              $venta->precio  =$request ->  input ('precio');
              $venta->idproducto  =$request -> input ('idproducto');
              $venta->idcliente  =$request -> input ('idcliente');
              $venta->idempleado  =$request -> input ('idempleado');


        // $paciente->update($fields);
        $venta = Venta::all();
        $cliente = cliente::all();
        $empleado = Empleado::all();
        $producto = Producto::all();

         return view('venta.edit', compact (['venta','cliente','empleado','producto']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Venta $venta) {
        $venta->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('venta.index')->with('status', 'Venta eliminado');

    }
}
