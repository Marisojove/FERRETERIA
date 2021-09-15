<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        return view('marca.index');

    }
    public function create(){
        return view('marca.create');

    }
    public function show($marca){
        return view('marca.show',['marca'=>$marca]);

    }
}
