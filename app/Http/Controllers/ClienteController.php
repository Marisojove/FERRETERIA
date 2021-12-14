<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();
       // $paciente =Paciente::orderBy('id', 'desc') ->paginate();
        return view('cliente.index', compact('cliente'));
    }
    public function create(){
        return view('cliente.create');

    }
    public function store(Request $request){
$request->validate([
    'nombre'=>'required',
    'apellido'=>'required',
    'cedula'=>'required'
]);
$cliente = new Cliente;
$cliente->nombre = $request->input('nombre');
$cliente->apellido = $request->input('apellido');
$cliente->cedula = $request->input('cedula');
$cliente->save();
//return view('cliente.index',compact('cliente'));
return redirect()->route('cliente.show',$cliente);
    }
    public function show(Cliente $cliente){


      return view('cliente.show', compact('cliente'));

    }
    public function edit(Cliente $cliente){
        return view('cliente.edit',compact('cliente'));
    }
    public function update(Request $request,Cliente $cliente){
    $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'cedula'=>'required'
        ]);
        $cliente->nombre = $request->input ('nombre');
        $cliente->apellido = $request->input ('apellido');
        $cliente->cedula = $request->input ('cedula');
        //$cliente->update();
        $cliente->save();
        $cliente = Cliente::all();
        return view('cliente.index',compact('cliente'));
        //return redirect()->route('cliente.show',$cliente);
            }

            public function destroy(Cliente $cliente)
            {
                $cliente->delete();

               // $cliente = Cliente::all();
              // return redirect()->route('cliente.index', compact('cliente'))->with('status', 'cliente eliminado');
                return redirect()->route('cliente.index')->with('status', 'cliente eliminado');
            }
}
