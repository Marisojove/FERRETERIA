@extends('layouts.plantilla')

@section('title','editar Cliente')

@section('content')
    

<h1>En esta pagina podras editar un Cliente</h1>
<form action="{{route('clientes.update',$cliente)}}" method="POST">
    @csrf
    @method('put')
    <label for="">
         id cliente:  <input type="text" name="idcliente" value="{{old('idcliente',$cliente->idcliente)}}">
    </label>
    <br>
    <label for="">
        nombre: <input type="text" name="nombre" value="{{old('nombre',$cliente->nombre)}}">
    </label>
    <br>
    <label for="">
        apellido: <input type="text" name="apellido" value="{{old('apellido',$cliente->apellido)}}">
    </label>
    <br>
    <label for="">
        cedula: <input type="text" name="cedula" value="{{old('cedula',$cliente->cedula)}}">
    </label>
    <br>
    <button  type="submit">ACTUALIZAR</button>
</form>
        
 
@endsection