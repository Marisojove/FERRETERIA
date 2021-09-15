<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        return view('empleado.index');

    }
    public function create(){
        return view('empleado.create');

    }
    public function show($empleado){
        return view('empleado.show',['empleado'=>$empleado]);

    }
}
