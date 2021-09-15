<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('producto.index');

    }
    public function create(){
        return view('producto.create');

    }
    public function show($producto){
        return view('producto.show',['producto'=>$producto]);

    }
}
