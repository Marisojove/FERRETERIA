<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        $marca = Marca::all();
        return view('marca.index', compact('marca'));

    }
    public function create(){
        return view('marca.create');

    }

    public function store(Request $request){


        $request ->validate([

         'nombre' => 'required',
         'cantidad' => 'required'
          ]);



                $marca = new Marca;

                $marca->nombre  =$request ->  input ('nombre');
                $marca->cantidad  =$request -> input ('cantidad');
                $marca->save();
                //return view('marca.index', compact('marca'));
                 return redirect() ->route('marca.show', $marca);
            }

    public function show(Marca $marca){
        return view('marca.show', compact ('marca'));

    }
    public function edit(Marca $marca){
        return view('marca.edit', compact ('marca'));

    }

    public function update(Request $request, Marca $marca){

        $request ->validate([

             'nombre' => 'required',
             'cantidad' => 'required'
              ]);


         $marca->nombre  =$request ->input ('nombre');
         $marca->cantidad  =$request ->input ('cantidad');

        // $paciente->update($fields);
        $marca->save();
         $marca = Marca::all();

         return view('marca.index', compact ('marca'));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Marca $marca) {
        $marca->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('marca.index')->with('status', 'marca eliminado');

    }
}
