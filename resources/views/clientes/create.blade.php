@extends('layouts.plantilla')

@section('title','Crear Cliente')

@section('content')
    

<h1>En esta pagina podras agregar un Cliente</h1>
<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <label for="">
         id cliente:  <input type="text" name="idcliente" value="{{old('idcliente')}}">
    </label>
    
    <br>
    <label for="">
        nombre: <input type="text" name="nombre" value="{{old('nombre')}}">
    </label>
    @error('nombre')
        
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
    <label for="">
        apellido: <input type="text" name="apellido" value="{{old('apellido')}}">
    </label>
    <br>
    <label for="">
        cedula: <input type="text" name="cedula" value="{{old('cedula')}}">
    </label>
    <br>
    <button  type="submit">REGISTRAR</button>
</form>
        
 
@endsection