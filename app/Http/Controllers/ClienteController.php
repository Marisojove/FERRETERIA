<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = cliente::all();
        $clientes = cliente::orderBy('id','desc')->paginate();

        return view('clientes.index',compact('cliente'));

    }
    public function create(){
        return view('clientes.create');

    }
    public function store(Request $request){
$request->validate([
    'nombre'=>'required',
    'apellido'=>'required',
    'cedula'=>'required'
]);
$cliente = new Cliente();
$cliente->nombre = $request->nombre;
$cliente->apellido = $request->apellido;
$cliente->cedula = $request->cedula;
$cliente->save();
return view('clientes.index',compact('cliente'));
//return redirect()->route('Clientes.show',$cliente);
    }
    public function show(Cliente $cliente){


        return view('clientes.show', compact('cliente'));

    }
    public function edit($id){
        return view('clientes.edit',compact('cliente'));
    }
    public function update(Request $request,Cliente $cliente){
        $fields = $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'cedula'=>'required']);

            return view('clientes.index',compact('cliente'));
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula = $request->cedula;
        $cliente->update($fields);
        $cliente = Cliente::all();

        //$cliente->save();
        //return redirect()->route('clientes.show',$cliente);
            }
            public function destroy(Cliente $cliente)
            {
                $cliente->delete();

                $cliente = Cliente::all();
                return redirect()->route('clientes.index', compact('cliente'))->with('status', 'cliente eliminado');
            }
}
