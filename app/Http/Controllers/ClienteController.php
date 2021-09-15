<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view('cliente.index');

    }
    public function create(){
        return view('cliente.create');

    }
    public function show($cliente){
        return view('cliente.show',['cliente'=>$cliente]);

    }
}
