@extends('layouts.plantilla')

@section('title','Cliente')

@section('content')
    


<h1>Bienvenidos a la pagina Cliente</h1> 
<a href="{{clientes.create}} "> crear cliente </a>
<a href="{{clientes.edit,$cliente}}">editar cliente</a>
 <ul>
     @foreach($clientes as $cliente)
     <li>
         <a href="{{route('clientes.show').$cliente->idcliente}}"> {{$cliente->nombre}}</a>
     </li>
     @endforeach
 </ul>
 {{$clientes->links }}
@endsection