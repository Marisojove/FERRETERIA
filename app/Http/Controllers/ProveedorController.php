<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        $proveedor = Proveedore::all();
        return view('proveedor.index', compact('proveedor'));

    }
    public function create(){
        return view('proveedor.create');

    }

    public function store(Request $request){


        $request ->validate([

         'nombres' => 'required',
         'apellidos' => 'required',
         'celular' => 'required',
         'fecha' => 'required'
          ]);



                $proveedor = new Proveedore;

                $proveedor->nombres  =$request ->  input ('nombres');
                $proveedor->apellidos  =$request -> input ('apellidos');
                $proveedor->celular  =$request -> input ('celular');
                $proveedor->fecha  =$request -> input ('fecha');
                $proveedor->save();
                //return view('proveedor.index', compact('proveedor'));
                 return redirect() ->route('proveedor.show', $proveedor);
            }

    public function show(Proveedore $proveedor){
        return view('proveedor.show', compact ('proveedor'));

    }
    public function edit(Proveedore $proveedor){
        return view('proveedor.edit', compact ('proveedor'));

    }

    public function update(Request $request, Proveedore $proveedor){

        $request ->validate([

             'nombres' => 'required',
             'apellidos' => 'required',
             'celular' => 'required',
             'fecha' => 'required'
              ]);


         $proveedor->nombres  =$request ->input ('nombres');
         $proveedor->apellidos  =$request ->input ('apellidos');
         $proveedor->celular  =$request ->input ('celular');
         $proveedor->fecha  =$request ->input ('fecha');

        // $paciente->update($fields);
        $proveedor->save();
         $proveedor = Proveedore::all();

         return view('proveedor.index', compact ('proveedor'));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Proveedore $proveedor) {
        $proveedor->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('proveedor.index')->with('status', 'Proveedor eliminado');

    }
}

