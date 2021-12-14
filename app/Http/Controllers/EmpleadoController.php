<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleado = Empleado::all();
       // $empleado =Empleado::orderBy('id', 'desc') ->paginate();
        return view('empleado.index', compact('empleado'));
    }
    public function create(){
        return view('empleado.create');

    }

    public function store(Request $request){


$request ->validate([

 'nombres' => 'required',
 'apellidos' => 'required',
 'cargo' => 'required',
 'ci' => 'required',
 'celular' => 'required',
 'genero' => 'required',
 'estado' => 'required'
  ]);



        $empleado = new Empleado;

        $empleado->nombres  =$request ->  input ('nombres');
        $empleado->apellidos  =$request -> input ('apellidos');
        $empleado->cargo  =$request -> input ('cargo');
        $empleado->ci  =$request -> input ('ci');
        $empleado->celular  =$request -> input ('celular');
        $empleado->genero  =$request -> input ('genero');
        $empleado->estado  =$request -> input ('estado');
        $empleado->save();
        //return view('empleado.index', compact('empleado'));
         return redirect() ->route('empleado.show', $empleado);
    }
    public function show(Empleado $empleado){


        return view('empleado.show', compact ('empleado'));

    }

    public function edit(Empleado $empleado){
        return view('empleado.edit', compact ('empleado'));

    }
    public function update(Request $request, Empleado $empleado){

       $request ->validate([

            'nombres' => 'required',
            'apellidos' => 'required',
            'cargo' => 'required',
            'ci' => 'required',
            'celular' => 'required',
            'genero' => 'required',
            'estado' => 'required'
             ]);


        $empleado->nombres  =$request ->input ('nombres');
        $empleado->apellidos  =$request ->input ('apellidos');
        $empleado->cargo  =$request ->input ('cargo');
        $empleado->ci  =$request ->input ('ci');
        $empleado->celular  =$request ->input ('celular');
        $empleado->genero  =$request ->input ('genero');
        $empleado->estado  =$request ->input ('estado');

       // $empleado->update($fields);
       $empleado->save();
        $empleado = Empleado::all();

        return view('empleado.index', compact ('empleado'));
       // $empleado->save();

        //return redirect() ->route('empleado.show', $empleado);
    }

    public function destroy(Empleado $empleado) {
    $empleado->delete();

   // $empleado = Empleado::all();
  // return redirect()->route('empleado.index', compact('empleado'))->with('status', 'Empleado eliminado');
    return redirect()->route('empleado.index')->with('status', 'Empleado eliminado');

}
}
