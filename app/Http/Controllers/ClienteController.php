<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = cliente::orderBy('id','desc')->paginate();

        return view('clientes.index',compact('cliente'));

    }
    public function create(){
        return view('clientes.create');

    }
    public function store(Request $request){
$request->validate([
    'idcliente' => 'required',
    'nombre'=>'required',
    'apellido'=>'required',
    'cedula'=>'required'
]);
$cliente = new Cliente();
$cliente->idcliente = $request->idcliente;
$cliente->nombre = $request->nombre;
$cliente->apellido = $request->apellido;
$cliente->cedula = $request->cedula;
$cliente->save();
return redirect()->route('Clientes.show',$cliente);
    }
    public function show(cliente $cliente){

 
        return view('clientes.show', compact('cliente'));

    }
    public function edit($id){
        return view('clientes.edit',compact('cliente')); 
    }
    public function update(Request $request,Cliente $cliente){
        $request->validate([
            'idcliente' => 'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'cedula'=>'required']);
        $cliente->idcliente = $request->idcliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->cedula = $request->cedula;
        $cliente->save();
        return redirect()->route('clientes.show',$cliente);
            }
}
